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

            // Step 1
            $table->string('project_name')->nullable();
            $table->string('target_type')->default('myself')->nullable();
            $table->string('visibility')->default('public')->nullable();

            // Step 2
            $table->string('profile_photo')->nullable();
            $table->string('full_name')->nullable();
            $table->string('title_role')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('location')->nullable();
            $table->text('short_bio')->nullable();

            // Step 3
            $table->json('skills')->nullable(); 
          
            // Step 4
            $table->json('experiences')->nullable(); 
           
            // Step 5
            $table->json('projects')->nullable(); 

            // Step 6
            $table->json('education')->nullable(); 
           
            $table->json('certifications')->nullable(); 
       

            // Step 7
            $table->json('social_links')->nullable(); 
          
            $table->json('languages')->nullable(); 
          
            $table->json('hobbies')->nullable(); 

            $table->json('achievements')->nullable(); 
           

            // Step 8
            $table->string('template_name')->default('enterprise_hub'); 
   
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
