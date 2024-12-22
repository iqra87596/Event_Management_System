<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Handle the registration request.
     */
    public function registerPost(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        // Automatically log in the user after registration
        Auth::login($user);

        // Redirect to home with a success message
        return redirect('/home')->with('success', 'Registered successfully!');
    }

    /**
     * Show the login form.
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     */
    public function loginPost(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            return redirect('/home')->with('success', 'Login successful!');
        }

        // If authentication fails, return with an error message
        return back()->with('error', 'Invalid email or password.');
    }

    /**
     * Handle the logout request.
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
