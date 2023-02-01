<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\User;

class CreateUserController extends Controller
{
    public function create()
    {
        if (!auth()->check()) {
            return view('create-user');
        }else{
            return redirect()->to('/home');
        }
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/home');
    }
}
