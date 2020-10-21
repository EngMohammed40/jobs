<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class JobSeekerPage extends Model{
    
    protected $table = 'job_seekers_page';
    
    protected $fillable = [
        
        'banner_image',
        'rule_image',
        ];
    
}