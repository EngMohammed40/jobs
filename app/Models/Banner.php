<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Banner extends Model
{
     protected $table = 'banners';
     
     protected $fillable =[
        
        'banner_image',
        'banner_head',
        'banner_body',
        'page',
        ];
}