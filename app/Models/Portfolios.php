<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolios;
class Portfolios extends Model
{
    use HasFactory;

    protected $table = 'portfolios';


    // Define all fillable columns to protect against mass-assignment vulnerabilities
    protected $fillable = [
        'user_id',
        'project_name',
        'target_type',
        'visibility',
        'profile_photo',
        'full_name',
        'title_role',
        'email',
        'phone_number',
        'location',
        'short_bio',
        'skills',
        'experiences',
        'projects',
        'education',
        'certifications',
        'social_links',
        'languages',
        'hobbies',
        'achievements',
        'template_name',
    ];

    // Automatically cast JSON database columns into PHP arrays seamlessly
    protected $casts = [
        'skills' => 'array',
        'experiences' => 'array',
        'projects' => 'array',
        'education' => 'array',
        'certifications' => 'array',
        'social_links' => 'array',
        'languages' => 'array',
        'hobbies' => 'array',
        'achievements' => 'array',
    ];

    // Relationship: A portfolio belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

