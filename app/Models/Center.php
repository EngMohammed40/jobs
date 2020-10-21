<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Center extends Model
{
      protected $fillable = [
          'personal_name',
          'job_name',
          'email',
          'mobile',
          'center_name',
          'center_field',
          'country_id',
          'city_id',
          'user_email',
          'name_hide',
          'job_name_hide',
          'email_hide',
          'mobile_hide',
          'chat',
          'center_about',
          'link',
          'hear_about',
          'facebook',
          'twitter',
          'linkedin',
          'profile_color',
          'password',
          'logo'
          ];
          
          
        public function country(){
            return $this->belongsTo(Country::class);
        }  
        public function city(){
            return $this->belongsTo(City::class);
        }  
          
          
          
          
          
          
          
          
          
          
}