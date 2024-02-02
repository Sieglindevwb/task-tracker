<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() 
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('succes', 'Good');
    }
}
