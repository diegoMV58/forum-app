<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
{   
    if(auth()->check()){
        return view('post');    
    }else{
        return view('home');
    }
    
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'image',
    ]);

    $post = new post();
    $post->title = $validatedData['title'];
    $post->content = $validatedData['content'];
    $post->username = auth()->user()->name;
    if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/posts'), $imageName);
        $post->image_src = 'img/posts/'.$imageName;
    }else{
        $post->image_src = "no_image";
    }

    $post->save();

    return redirect()->to('/home');
}

}