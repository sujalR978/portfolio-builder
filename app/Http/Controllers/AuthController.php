<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/log_in')
            ->with('success', 'Registration Successfully!');
    }

    public function log_in(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
         if (
            $request->email === 'admin123@gmail.com' &&
            $request->password === 'admin123'
        ) {
            // Remove any normal user login
            Auth::logout();

            // Create admin session
            $request->session()->regenerate();

            session([
                'is_admin' => true,
                'is_logged_in' => true,
            ]);

            return redirect('/admin_dashboard');
        }


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

                    session()->forget([
                'is_admin',
                'is_logged_in',
            ]);

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email or password is incorrect.',
        ])->onlyInput('email');
    }

    public function log_out(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/log_in')
            ->with('success', 'You have been logged out successfully.');
    }


public function deleteUser(User $user)
{
    $user->delete();

    return back()->with('success', 'User deleted successfully.');
}


    public function adminDashboard(Request $request)
    {
        // Check admin
        if (!session('is_admin')) {
            return redirect('/log_in')->withErrors([
                'email' => 'Admin authorization required.'
            ]);
        }

        // Search value
        $search = $request->search;

        // Get users
        $users = User::query()
            ->when($search, function ($query) use ($search) {

                $query->where('firstName', 'like', '%' . $search . '%')
                      ->orWhere('lastName', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%')
                      ->orWhere('id', 'like', '%' . $search . '%');

            })
            ->get();

        return view('admin.admin_dashboard', compact('users'));
    }

    public function updateName(Request $request)
{
    $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'bio' => 'nullable|string|max:500',
        'slug' => 'nullable|string|max:255|unique:users,slug,' . Auth::id(), 
        'github' => 'nullable|string|max:255',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', 
    ]);

    $user = Auth::user();


    $user->firstName = $request->input('firstName');
    $user->lastName = $request->input('lastName'); 
    $user->bio = $request->input('bio');
    $user->slug = $request->input('slug');
    $user->github = $request->input('github');


    if ($request->hasFile('profile_image')) {
        $imagePath = $request->file('profile_image')->store('profiles', 'public');
        $user->profile_image = $imagePath; 
    }
    
    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully!');
}

public function deleteAccount(Request $request)
{
    $user = Auth::user();


    if ($user->profile_image) {
        \Illuminate\Support\Facades\Storage::disk('public')->delete($user->profile_image);
    }

    $user->delete();


    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/log_in')->with('success', 'Your account has been permanently deleted.');
}
}