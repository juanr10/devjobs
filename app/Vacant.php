<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'experience_id',
        'location_id',
        'salary_id',
        'skills',
        'image'
    ];

    //Recruiter
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
}
