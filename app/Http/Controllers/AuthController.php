<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function submit(Request $request)
    {
        if ($request->has('name')) {
            // Registration logic
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:6',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('auth.view')->with('success', 'Registration successful!');
        } else {
            // Login logic
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (auth()->attempt($request->only('email', 'password'))) {
                return redirect()->route('dashboard'); // Replace with your dashboard route
            }

            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
