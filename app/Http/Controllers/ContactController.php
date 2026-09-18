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

   public function adminInquiry(Request $request)
{
    if (!session('is_admin')) {
        return redirect('/log_in')->withErrors([
            'email' => 'Admin authorization required.'
        ]);
    }

    $search = $request->search;

    $contact = Contact::query()
        ->when($search, function ($query) use ($search) {

            $query->where(function ($query) use ($search) {

                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%')
                      ->orWhere('subject', 'like', '%' . $search . '%')
                      ->orWhere('message', 'like', '%' . $search . '%');

            });

        })
        ->latest()
        ->get();

    $selectedContact = null;

    if ($request->filled('id')) {
        $selectedContact = $contact->firstWhere('id', $request->id);
    }

    return view('admin.admin_inquiry', compact(
        'contact',
        'search',
        'selectedContact'
    ));
}


public function deleteContact(contact $contact)
{
    $contact->delete();

    return back()->with('success', 'User deleted successfully.');
}
}
