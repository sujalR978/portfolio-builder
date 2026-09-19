<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
        // 1. Remove or comment out the dd() line:
        // dd($request->all());

        $request->validate([
            'rating' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'category' => 'required',
            'message' => 'required|string|min:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $screenshotPath = null;
        if ($request->hasFile('image')) {
            $screenshotPath = $request->file('image')->store('screenshots', 'public');
        }

        Feedback::create([
            'rating' => $request->rating,
            'name' => $request->name,
            'email' => $request->email,
            'category' => $request->category,
            'suggestions' => $request->message,
            'screenshot' => $screenshotPath,
        ]);

        return redirect('/feedback')->with('success', 'Feedback submitted successfully!');
    }

    public function adminFeedback(Request $request)
    {
        if (!session('is_admin')) {
            return redirect('/log_in')->withErrors([
                'email' => 'Admin authorization required.'
            ]);
        }

        $search = $request->search;

        $reviews = Feedback::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                          ->orWhere('email', 'like', '%' . $search . '%')
                          ->orWhere('category', 'like', '%' . $search . '%');
                });
            })
            ->latest()
            ->get();

        return view('admin.admin_feedback', compact(
            'reviews',
            'search'
        ));
    }
}