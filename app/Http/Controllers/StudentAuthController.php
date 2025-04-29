<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class StudentAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('studentRegister');
    }

    public function register(Request $request)
{
    $details = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    $user = User::create([
        'name' => $details['name'],
        'email' => $details['email'],
        'password' => bcrypt($details['password']),
        'role' => 'student',
    ]);

    Auth::login($user);

    return redirect()->route('student.dashboard');
}


    public function showLoginForm()
    {
        return view('studentLogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'student') {
                return redirect()->route('student.dashboard');
            } elseif ($user->role === 'staff') {
                return redirect()->route('staff.dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'Invalid user role.']);
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }
}
