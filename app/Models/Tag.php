<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    // This below function stages the relationship between the Jobs and the Employer
    public function job()
    {
        return $this->belongsToMany(Job::class, relatedPivotKey: "jobs_listing_id");
    }
}
