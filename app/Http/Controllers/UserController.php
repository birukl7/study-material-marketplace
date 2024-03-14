<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    //
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Create a new user using the validated data
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        dd($user);

        // Authenticate the user
        Auth::login($user);

        // Redirect the user after successful registration
        return redirect('/home');
    }

    public function login(Request $request) {

    }

}
