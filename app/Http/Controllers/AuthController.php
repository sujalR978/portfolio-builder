<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function register(Request $request){
  

        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|min:8|confirmed',
            

        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' =>$request->password,
        ]);

        return Redirect('/log_in')->with('success','Registration Successfully!');
   }

   public function Login(Request $request){

    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect('/dashboard');
    }

    return back()->withErrors([
        'email' => 'Email or password is incorrect.',
    ])->onlyInput('email');
   }
}