<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $title = 'register';
        return view('pages.register')->with('title', $title);
    }
    public function store(Request $request)
{
    //  Validate inputs
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    //  Create user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // dd($user);

    //  (Optional) Auto login user
    auth()->login($user);

    //  Redirect
    return view('pages.index')->with('success', 'Registration successful!');
}

}
