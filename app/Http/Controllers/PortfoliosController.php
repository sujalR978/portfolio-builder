<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolios;

class PortfoliosController extends Controller
{
    public function storeOrUpdate(Request $request, $id = null)
    {

    dd($request->all());
        // 1. Validate incoming fields across all wizard steps
        $validatedData = $request->validate([
            // Step 1: Project Basics[cite: 1]
            'project_name' => 'required|string|max:255',
            'target_type' => 'required|string|in:myself,client,company',
            'visibility' => 'required|string|in:public,private',

            // Step 2: Personal Details[cite: 2]
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'full_name' => 'required|string|max:255',
            'title_role' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:255',
            'short_bio' => 'nullable|string|max:300',

            // Step 3: Skills[cite: 3]
            'skills' => 'nullable|array',
            'skills.*.name' => 'required_with:skills|string|max:255',
            'skills.*.proficiency' => 'required_with:skills|integer|min:1|max:5',

            // Step 4: Professional Experience[cite: 4]
            'experiences' => 'nullable|array',
            'experiences.*.company' => 'required_with:experiences|string|max:255',
            'experiences.*.role' => 'required_with:experiences|string|max:255',
            'experiences.*.start_date' => 'required_with:experiences|string',
            'experiences.*.end_date' => 'nullable|string',
            'experiences.*.current' => 'nullable|boolean',
            'experiences.*.description' => 'nullable|string',

            // Step 5: Featured Projects[cite: 5, 6]
            'projects' => 'nullable|array',
            'projects.*.title' => 'required_with:projects|string|max:255',
            'projects.*.description' => 'nullable|string',
            'projects.*.tech_stack' => 'nullable|string',
            'projects.*.demo_link' => 'nullable|url',
            'projects.*.image_url' => 'nullable|string',

            // Step 6: Education & Certifications[cite: 7]
            'education' => 'nullable|array',
            'education.*.school' => 'required_with:education|string|max:255',
            'education.*.degree' => 'required_with:education|string|max:255',
            'education.*.year' => 'nullable|string',

            'certifications' => 'nullable|array',
            'certifications.*.name' => 'required_with:certifications|string|max:255',
            'certifications.*.issuer' => 'nullable|string|max:255',
            'certifications.*.year' => 'nullable|string',

            // Step 7: Additional Details & Branding[cite: 8, 9]
            'social_links' => 'nullable|array',
            'languages' => 'nullable|array',
            'hobbies' => 'nullable|array',
            'achievements' => 'nullable|array',
            'achievements.*.title' => 'required_with:achievements|string|max:255',
            'achievements.*.issuer' => 'nullable|string|max:255',

            // Step 8: Template Selection[cite: 10]
            'template_name' => 'nullable|string|max:255',
        ]);

        // 2. Handle Profile Photo Upload if present
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('portfolios/avatars', 'public');
            $validatedData['profile_photo'] = $path;
        }

        // 3. Find existing portfolio or create a new one for the authenticated user
        if ($id) {
            $portfolio = Portfolio::where('user_id', Auth::id())->findOrFail($id);
            
            // If updating, delete old image if a new one is uploaded
            if ($request->hasFile('profile_photo') && $portfolio->profile_photo) {
                Storage::disk('public')->delete($portfolio->profile_photo);
            }

            $portfolio->update($validatedData);
            $message = 'Portfolio updated successfully!';
        } else {
            $validatedData['user_id'] = Auth::id();
            $portfolio = Portfolio::create($validatedData);
            $message = 'Portfolio created successfully!';
        }

        // 4. Redirect back with success message
        return redirect()->route('dashboard')->with('success', $message);
    }
}
