<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Home_Page extends Model
{
     protected $table = 'home_page';
     
     protected $fillable =[
        
        'banner_head_1',
        'banner_head_2',
        'banner_body_1',
        'banner_body_2',
        'banner_link_1',
        'banner_img_1',
        'banner_img_2',
        'banner_link_2',
        'banner_href_1',
        'banner_href_2',

        ];
}