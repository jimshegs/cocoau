<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Upload;
use App\Category;
use Carbon\Carbon;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('published_at', 'desc')->take(5)->get();
        $uploads = Upload::orderBy('created_at', 'desc')->take(4)->get();
    	return view('pages.home', compact('posts', 'uploads'));
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function gallery()
    {
        $uploads = Upload::simplePaginate(20);
        $categories = Category::all();

    	return view('pages.gallery', compact('uploads', 'categories'));
    }

}
