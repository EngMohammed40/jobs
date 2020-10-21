<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Education extends Model{
    
    protected $table = 'education';
    
    protected $fillable = [
        'job_seeker_id',
        'education_leve',
        'education_field',
        'experience'
        ];
    
    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
    
    
}