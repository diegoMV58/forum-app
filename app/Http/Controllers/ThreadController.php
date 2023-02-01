<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\response;

class ThreadController extends Controller
{
    public function index(Request $request)
{
    
       if(!$request->id){
        return redirect('/home');
        } else {
            $topic = post::findOrFail($request->id);
    $answers = response::where('post_id', $request->id)->paginate(3);
    
    return view('thread', compact('topic', 'answers'));

        }
}
}
