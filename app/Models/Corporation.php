<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Corporation extends Model
{
      protected $fillable = [
          'personal_name',
          'job_name',
          'email',
          'mobile',
          'corporation_name',
          'corporation_field',
          'corporation_sector',
          'corporation_size',
          'country_id',
          'city_id',
          'user_email',
          'name_hide',
          'job_name_hide',
          'email_hide',
          'mobile_hide',
          'chat',
          'corporation_about',
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