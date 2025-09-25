<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LogInController extends Controller
{
     public function login(Request $request)
    {
        //  validate inputs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //  check if user exists
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        //  manually verify password
        if (Hash::check($request->password, $user->password)) {
            // log in the user manually
            Auth::login($user);

            return redirect('/dashboard')->with('success', 'Login successful!');
        } else {
            return back()->withErrors(['password' => 'Incorrect password']);
        }
    }
}

