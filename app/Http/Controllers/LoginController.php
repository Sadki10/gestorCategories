<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function create()
    {
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $rememberMe = (bool)$request->rememberMe;
        if (\Auth::attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();

            return redirect()->intended()->with(
                'success', "T'has logat correctament"
            );
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function show(User $user)
    {
    }

    public function edit(User $user)
    {
    }

    public function update(Request $request, User $user)
    {
    }

    public function destroy(User $user)
    {
    }
}
