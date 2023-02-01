<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\post;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');
    if($request->sort){
        $data = post::where('title', 'like', "%{$query}%")->orderBy($request->sort,$request->dir)->paginate(10);
    }else{
        $data = post::where('title', 'like', "%{$query}%")->paginate(10);
    }
           
        
    return view('search',compact('data','query'));
}
}
