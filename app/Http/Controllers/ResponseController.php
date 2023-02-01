<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function create(Request $request)
    {   
        if(!$request->id){
            return redirect('/home');
            }
        if(auth()->check()){
            $topic = post::findOrFail($request->id);
            return view('response',compact('topic'));    
        }else{
            return view('home');
        }
        
    }
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'reply' => 'required',
        'image' => 'image',
        'id' => 'required'
    ]);

        var_dump($validatedData);
    $post = new response();
        $post->post_id = $validatedData['id'];
    $post->content = $validatedData['reply'];
    $post->username = auth()->user()->name;
    if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/posts'), $imageName);
        $post->image_src = 'img/posts/'.$imageName;
    }else{
            $post->image_src = "no_image";
    }

    $post->save();

    return redirect()->to('/thread?id='.$validatedData['id']);
}
}
