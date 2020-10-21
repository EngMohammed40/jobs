<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class WorkPlace extends Model{
    
    protected $table = 'work_places';
    
    protected $fillable = [
        
        'work_status',
        'region',
        'city',
        ];
    
        public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
    
}