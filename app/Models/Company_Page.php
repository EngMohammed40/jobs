<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Company_Page extends Model
{
     protected $table = 'companies_page';
     
     protected $fillable =[
        
        'banner_image',
        'banner_head',
        'banner_body',
        'features_right_img',
        'features_right_head',
        'features_right_body',
        'features_middle_img',
        'features_middle_head',
        'features_middle_body',
        'features_left_img',
        'features_left_head',
        'features_left_body',
        'rules_img',
        'rules_head',
        'rule_1',
        'rule_2',
        'rule_3',
        ];
}