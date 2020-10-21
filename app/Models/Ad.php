<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','type','content','link','adgroup_id'];

    public function ad_images()
    {
        return $this->hasMany(AdsImage::class);
    }


}
