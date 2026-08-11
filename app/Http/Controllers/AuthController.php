<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $users = [
        'admin' => [
            'email'    => 'admin@example.com',
            'password' => 'admin123',
            'role'     => 'admin',
            'name'     => 'Administrator',
        ],
        'user' => [
            'email'    => 'user@example.com',
            'password' => 'user123',
            'role'     => 'user',
            'name'     => 'Standard User',
        ]
    ];

    // Show Login View
    public function showLoginForm()
    {
        return view('landing_page.log_in');
    }

    // Handle Login Action
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $email    = $request->input('email');
        $password = $request->input('password');

        // Check Admin Credentials
        if ($email === $this->users['admin']['email'] && $password === $this->users['admin']['password']) {
            session([
                'is_logged_in' => true,
                'user_role'    => 'admin',
                'user_name'    => $this->users['admin']['name'],
            ]);
            return redirect('/admin_dashboard');
        }

        // Check Standard User Credentials
        if ($email === $this->users['user']['email'] && $password === $this->users['user']['password']) {
            session([
                'is_logged_in' => true,
                'user_role'    => 'user',
                'user_name'    => $this->users['user']['name'],
            ]);
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email address or password.',
        ])->withInput($request->only('email'));
    }

    // Handle Logout Action
   public function logout(Request $request)
{
    // Clear all session data (logged-in status, user roles, names)
    $request->session()->flush();

    // Regenerate session ID & CSRF token for security
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect to login page with a success message
    return redirect('/log_in')->with('success', 'Logged out successfully!');
}
}