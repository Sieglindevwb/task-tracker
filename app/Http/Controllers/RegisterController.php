<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() 
    {
    return view('register.create');
    }

    public function store() 
    {
        
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7', 'max:255'],
        ]);
        
        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');
    }
}
