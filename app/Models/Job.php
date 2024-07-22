<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Job extends Model
{
    use HasFactory;
    protected $table = "jobs_listing";
    // protected $fillable = ['employer_id', 'title', 'Salary'];
    protected $guarded = [];

    public static function findBlog($id)
    {
        $hold = static::find($id);
        if ($hold) {
            return true;
        } else {
            abort(404);
        }
    }

    // This below function stages the relationship between the employer and the Jobs
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "jobs_listing_id");
    }
}
