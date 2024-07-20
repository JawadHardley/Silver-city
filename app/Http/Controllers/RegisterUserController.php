<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validation
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', min(3)],
            'password' => ['required', Password::min(3), 'confirmed'],
        ]);
    }
}
