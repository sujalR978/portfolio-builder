<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortfoliosController extends Controller
{

public function create()
    {
        // Render the wizard view fresh for creating a brand new project
        return view('main.create_project');
    }
    public function storeOrUpdate(Request $request, $id = null)
    {
        $validatedData = $request->validate([
            // Step 1
            'project_name' => 'nullable|string|max:255',
            'target_type' => 'nullable|string|max:255',
            'visibility' => 'nullable|string|max:255',

            // Step 2
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'full_name' => 'nullable|string|max:255',
            'title_role' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone_number' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:255',
            'short_bio' => 'nullable|string|max:300',

            // Step 3
            'skills' => 'nullable|array',
            'skills.*.name' => 'nullable|string|max:255',
            'skills.*.proficiency' => 'nullable|integer|min:1|max:5',

            // Step 4
            'experiences' => 'nullable|array',
            'experiences.*.company' => 'nullable|string|max:255',
            'experiences.*.role' => 'nullable|string|max:255',
            'experiences.*.start_date' => 'nullable|string',
            'experiences.*.end_date' => 'nullable|string',
            'experiences.*.current' => 'nullable|boolean',
            'experiences.*.description' => 'nullable|string',

            // Step 5
            'projects' => 'nullable|array',
            'projects.*.title' => 'nullable|string|max:255',
            'projects.*.description' => 'nullable|string',
            'projects.*.tech_stack' => 'nullable|string',
            'projects.*.demo_link' => 'nullable|string',
            'projects.*.image_url' => 'nullable|string',

            // Step 6
            'education' => 'nullable|array',
            'education.*.school' => 'nullable|string|max:255',
            'education.*.degree' => 'nullable|string|max:255',
            'education.*.year' => 'nullable|string',

            'certifications' => 'nullable|array',
            'certifications.*.name' => 'nullable|string|max:255',
            'certifications.*.issuer' => 'nullable|string|max:255',
            'certifications.*.year' => 'nullable|string',

            // Step 7
            'social_links' => 'nullable|array',
            'languages' => 'nullable|array',
            'hobbies' => 'nullable|string|max:255',
            'achievements' => 'nullable|array',
            'achievements.*.title' => 'nullable|string|max:255',
            'achievements.*.issuer' => 'nullable|string|max:255',

            // Step 8
            'template_name' => 'nullable|string|max:255',
            
            // Step 9
            'delivery_method' => 'nullable|string|max:255',
        ]);

        // Handle File Upload
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('portfolios/avatars', 'public');
            $validatedData['profile_photo'] = $path;
        }

        if ($id) {
            // Update Mode
            $portfolio = Portfolios::where('user_id', Auth::id())->findOrFail($id);
            
            // Delete old avatar if a new one is being uploaded
            if ($request->hasFile('profile_photo') && $portfolio->profile_photo && Storage::disk('public')->exists($portfolio->profile_photo)) {
                Storage::disk('public')->delete($portfolio->profile_photo);
            }

            $portfolio->update($validatedData);
            $message = 'Portfolio updated successfully!';
        } else {
            // Create Mode
            $validatedData['user_id'] = Auth::id();
            $portfolio = Portfolios::create($validatedData);
            $message = 'Portfolio created successfully!';
        }

        return redirect()->route('dashboard')->with('success', $message);
    }

    public function deletePortfolios($id)
    {
        $portfolio = Portfolios::where('user_id', Auth::id())->findOrFail($id);

        if ($portfolio->profile_photo && Storage::disk('public')->exists($portfolio->profile_photo)) {
            Storage::disk('public')->delete($portfolio->profile_photo);
        }

        $portfolio->delete();

        return redirect()->route('dashboard')->with('success', 'Portfolio deleted successfully!');
    }

  public function edit($id)
{
    // Find existing portfolio belonging to the authenticated user
    $portfolio = Portfolios::where('user_id', Auth::id())->findOrFail($id);

    // Pass it to the view
    return view('main.create_project', compact('portfolio'));
}

public function index()
{

    $portfolios = Portfolios::with('user')->latest()->get();

    return view('main.explor', compact('portfolios'));
}
}