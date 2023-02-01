<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
{
    if($request->sort){
        $data = DB::table('posts')->orderBy($request->sort,$request->dir)
        ->paginate(10);

    }else{
        $data = DB::table('posts')->orderBy('created_at','desc')
        ->paginate(10);
    }
    
    

    return view('home',compact('data'));
}

}
