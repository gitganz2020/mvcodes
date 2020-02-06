<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;

class ApiController extends Controller
{
    
    public function show()
    {
    	
    	$contents = Content::all();

    	$response = response()->json($contents); 

    	return view('apiview',compact('contents','response'));

    }

    public function store(Request $request)
    {

    	//If data came from form then need a validation
    	// $validatedData = $request->validate([
	    //     'title' => 'required|unique:posts|max:255',
	    //     'description' => 'required',
	    // ]);

    	$contents = Content::create($request->all());

    	return response()->json($contents);
   
    }

    public function getcontentbyid($id)
    {
    	$content = Content::findOrFail($id);

    	$response = response()->json($content);

    	return view('single',compact('content','response'));
    }

    public function update($id, Request $request)
    {
    	$content = Content::findOrFail($id);

    	$content->title 		= $request->input('title');
    	$content->description 	= $request->input('description');

    	$content->save();

    	return response()->json($content);

    }

    public function delete($id, Request $request)
    {
    	$content = Content::findOrFail($id);

    	$content->delete();

    	return response()->json($content);

    }


}
