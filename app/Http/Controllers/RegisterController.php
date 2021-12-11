<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validatedDate = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:15', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5']
        ]);

        $validatedDate['password'] = bcrypt($validatedDate['password']);

        User::create($validatedDate);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
