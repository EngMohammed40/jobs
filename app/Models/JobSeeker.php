<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JobSeeker extends Model{
    
    protected $table = 'job_seekers';
    
    protected $fillable = [
        
        'sex',
        'social_state',
        'full_name',
        'birth_year',
        'nationality',
        'home_country',
        'home_city',
        'photo',
        'mobile',
        'email',
        'name_info',
        'mobile_info',
        'email_info',
        'min_salary',
        'job_type',
        ];
    
        public function educations()
    {
        return $this->hasMany(Education::class);
    }
    
        public function workplaces()
    {
        return $this->hasMany(WorkPlace::class);
    }
    
            public function country()
    {
        return $this->belongsTo(Country::class);
    }
                public function city()
    {
        return $this->belongsTo(City::class);
    }
    
}