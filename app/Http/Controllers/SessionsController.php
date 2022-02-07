<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // ddd($attributes, auth()->attempt($attributes));

        // attempt to authenticate and login user based on provided credentials
        if (auth()->attempt($attributes)) {
            // session()->regenerate();
            return redirect('/')->with('success', 'login successful!');
        }

        // authentication fails
        throw ValidationException::withMessages([
            'email' => 'provided email cannot be verified',
            'password' => 'provided password cannot be verified'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'logout successful!');
    }
}
