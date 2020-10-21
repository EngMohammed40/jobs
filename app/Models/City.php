<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class City extends Model
{
    protected $fillable = ['name'];

    use SoftDeletes;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function websites()
    {
        return $this->belongsToMany(Website::class, 'websites_cities');
    }

      public function region()
        {
            return $this->hasMany(Region::class);
        }
        
          public function jobSeeker()
        {
            return $this->hasMany(JobSeeker::class);
        }
        
        public function jobs()
        {
            return $this->hasMany(Job::class);
        }
        public function corporations(){
            return $this->hasMany(Corporation::class);
        }
        public function companies(){
            return $this->hasMany(Company::class);
        }
        public function centers(){
            return $this->hasMany(Company::class);
        }
}
