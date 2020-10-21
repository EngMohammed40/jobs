<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Country extends Model
{
      protected $fillable = ['name','code','currency','image'];
        use SoftDeletes;

        public function cities()
        {
            return $this->hasMany(City::class);
        }

        public function websites()
        {
            return $this->hasMany(Website::class);
        }

        public function icons()
        {
            return $this->hasMany(Icon::class);
        }

        public function regions()
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
