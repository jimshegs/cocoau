<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Jobs\PostFormFields;
use App\Http\Requests;
use App\Http\Requests\PostFormRequest;
use App\Http\Requests\PostEditFormRequest;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {
        return view('backend.posts.index')
        ->withPosts(Post::all());
    }
    
    public function create()
    {
    	$data = $this->dispatch(new PostFormFields());

        return view('backend.posts.create', $data);
    }

    public function store(PostFormRequest $request)
    {
    	$post = Post::create($request->postFillData());
        $post->syncTags($request->get('tags', []));

        return redirect()
            ->route('admin.post.index')
            ->withSuccess('New Post Successfully Created.');
    }

    public function edit($id)
    {
    	$data = $this->dispatch(new PostFormFields($id));

        return view('backend.posts.edit', $data);
    }

    public function update(PostEditFormRequest $request, $id)
    {
    	$post = Post::findOrFail($id);
        $post->fill($request->postFillData());
        $post->save();
        $post->syncTags($request->get('tags', []));

        if ($request->action === 'continue') {
          return redirect()
              ->back()
              ->withSuccess('Post saved.');
        }

        return redirect()
            ->route('admin.post.index')
            ->withSuccess('Post saved.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();

        return redirect()
            ->route('admin.post.index')
            ->withSuccess('Post deleted.');
    }

}
