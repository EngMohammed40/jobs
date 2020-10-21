<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','description'];
    
    public function country(){
        return $this->belongsTo(Country::class);
    }
    
        public function city(){
        return $this->belongsTo(City::class);
    }
}
