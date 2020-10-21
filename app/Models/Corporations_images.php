<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Corporations_images extends Model
{
     protected $table = 'corporations_images';
     
     protected $fillable =[
        
        'banner_image',
        'feature_image',
        'rule_image',
        ];
}