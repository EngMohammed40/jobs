<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteDetail extends Model
{
    protected $fillable = ['website_name','website_logo','website_rating','website_currency','website_description','website_keywords','website_email','website_phone','website_fax','website_address','website_mail','website_facebook','website_google','website_twitter','website_instagram','website_youtube'];

}
