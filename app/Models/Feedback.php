<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Feedback;
class Feedback extends Model
{
    protected $table = 'feedback';
  protected $fillable = [
        'rating',
        'name',
        'email',
        'category',
        'suggestions',
        'screenshot',
    ];
}
