<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Links to logged-in user

            // Step 1: Project Basics[cite: 1]
            $table->string('project_name');
            $table->string('target_type')->default('myself'); // myself, client, company
            $table->string('visibility')->default('public'); // public, private

            // Step 2: Personal Details[cite: 2]
            $table->string('profile_photo')->nullable();
            $table->string('full_name');
            $table->string('title_role');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('location')->nullable();
            $table->text('short_bio')->nullable();

            // Step 3: Skills / Competencies (Stored as JSON array)[cite: 3]
            $table->json('skills')->nullable(); 
            // Structure: [{'name': 'React.js', 'proficiency': 3}]

            // Step 4: Professional Experience (Stored as JSON array)[cite: 4]
            $table->json('experiences')->nullable(); 
            // Structure: [{'company': 'Acme', 'role': 'Dev', 'start_date': '...', 'end_date': '...', 'current': false, 'description': '...'}]

            // Step 5: Featured Projects (Stored as JSON array)[cite: 5, 6]
            $table->json('projects')->nullable(); 
            // Structure: [{'title': '...', 'description': '...', 'tech_stack': '...', 'demo_link': '...', 'image_url': '...'}]

            // Step 6: Education & Certifications (Stored as JSON arrays)[cite: 7]
            $table->json('education')->nullable(); 
            // Structure: [{'school': '...', 'degree': '...', 'year': '...'}]
            $table->json('certifications')->nullable(); 
            // Structure: [{'name': '...', 'issuer': '...', 'year': '...'}]

            // Step 7: Additional Details / Branding (Stored as JSON arrays/objects)[cite: 8, 9]
            $table->json('social_links')->nullable(); 
            // Structure: {'linkedin': '...', 'twitter': '...', 'github': '...', 'website': '...'}
            $table->json('languages')->nullable(); 
            // Structure: ['English', 'German']
            $table->json('hobbies')->nullable(); 
            // Structure: ['Generative Art', 'Sailing']
            $table->json('achievements')->nullable(); 
            // Structure: [{'title': 'Top 1% UI', 'issuer': 'Global Design Council'}]

            // Step 8: Template Selection[cite: 10]
            $table->string('template_name')->default('enterprise_hub'); 
            // Values: enterprise_hub, ag
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
