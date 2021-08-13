<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => ['required', 'min:2', 'max:255'],
            'email' => ['required', 'min:3', 'max:255', 'unique:users,email'],
            'city' => ['required', 'min:2', 'max:255'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        $user = User::create($attributes);
//        ddd($user);
        auth()->login($user);

        return redirect('/');
    }
}
