<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Company extends Model
{
     protected $fillable = [
          'personal_name',
          'job_name',
          'email',
          'mobile',
          'company_name',
          'country_id',
          'city_id',
          'user_email',
          'name_hide',
          'job_name_hide',
          'email_hide',
          'mobile_hide',
          'chat',
          'company_about',
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