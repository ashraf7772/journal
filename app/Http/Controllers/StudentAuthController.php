<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // If students are stored in the 'users' table
class StudentAuthController extends Controller
{
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        // Create new student
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        return redirect()->route('student.login')->with('success', 'Registration was successful. You can now log in.');
    }



    public function login(Request $request)
    {
        $details = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($details)) {
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors(['email' => 'Wrong Details']);
    }
}


