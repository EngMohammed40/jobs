<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Corporation_Page extends Model
{
     protected $table = 'corporations_page';
     
     protected $fillable =[
        
        'banner_image',
        'banner_head_1',
        'banner_body_1',
        'banner_head_2',
        'banner_body_2',
        'banner_head_3',
        'banner_body_3',
        'feature_head',
        'feature_image',
        'feature_1',
        'feature_2',
        'feature_3',
        'feature_4',
        'feature_5',
        'feature_6',
        ];
}