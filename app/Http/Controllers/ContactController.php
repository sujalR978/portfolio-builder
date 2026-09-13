<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function contact(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'subject' => 'required|string|max:500',
            'message' => 'required|min:2',
        ]);

        $user = contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' =>$request->message,
        ]);

        return Redirect('/log_in')->with('success','Registration Successfully!');
    }
}
