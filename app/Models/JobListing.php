<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobListing extends Model
{
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];
}
