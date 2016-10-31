<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Steward;
use App\Http\Requests;
use App\Providers\UploadsManager;
use App\Http\Requests\StewardCreateRequest;
use App\Http\Requests\StewardUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class StewardController extends Controller
{

	protected $fields = [
		'name' => '',
		'office' => '',
		'department' => '',
		'level' => '',
		'page_image' => '',
		'profile_photo' => '',
		'bible_passage' => '',
		'bible_character' => '',
		'twitter' => '',
		'facebook' => '',
		'instagram' => '',
	];

	protected $manager;

	public function __construct(UploadsManager $manager)
	{
	$this->manager = $manager;
	}

    public function create()
    {
    	$data = [];
    	foreach($this->fields as $field => $default) {
    		$data[$field] = old($field, $default);
    	}

    	return view('backend.steward.create', $data);
    }

    public function index()
    {
    	$stewards = Steward::all();

    	return view('backend.steward.index')->withStewards($stewards);
    }

    public function store(StewardCreateRequest $request)
    {
    	$file = $_FILES['file'];
	    $fileName = $request->get('file_name');
	    $fileName = $fileName ?: $file['name'];
	    $path = str_finish($request->get('folder'), '/') . $fileName;
	    $content = File::get($file['tmp_name']);

	    $result = $this->manager->saveFile($path, $content);

    	$steward = new Steward();
		foreach (array_keys($this->fields) as $field) {
		  $steward->$field = $request->get($field);
		}
		$steward['profile_photo'] = $file['name'];
		$steward->save();

		return redirect('/admin/steward')
		    ->withSuccess("The steward '$steward->name' was created.");
    }

    public function edit($id)
    {
    	$steward = Steward::findOrFail($id);
		$data = ['id' => $id];
		foreach (array_keys($this->fields) as $field) {
		  	$data[$field] = old($field, $steward->$field);
		}

		return view('backend.steward.edit', $data);
    }

    public function update(StewardUpdateRequest $request, $id)
	{
		$steward = Steward::findOrFail($id);

		$file = $_FILES['file'];
	    $fileName = $request->get('file_name');
	    $fileName = $fileName ?: $file['name'];
	    $path = str_finish($request->get('folder'), '/') . $fileName;
	    $content = File::get($file['tmp_name']);

	    $result = $this->manager->saveFile($path, $content);

		foreach (array_keys($this->fields) as $field) {
		  $steward->$field = $request->get($field);
		}
		$steward['profile_photo'] = $file['name'];
		

		$steward->save();

		return redirect("/admin/steward")->withSuccess("Changes saved.");
	}

	/**
   * Delete the steward
   *
   * @param  int  $id
   * @return Response
   */

	public function destroy($id)
	{
		$steward = Steward::findOrFail($id);
		$steward->delete();

		return redirect('/admin/steward')->withSuccess("The steward '$steward->name' has been deleted");
	}

	public function show($name, Request $request)
    {
    	$steward = Steward::whereName($name)->firstOrFail();

        return view('pages.steward.show', compact('steward'));
    }

    public function stewards()
    {
    	$stewards = Steward::all();

    	return view('pages.steward.index', compact('stewards'));
    }
}
