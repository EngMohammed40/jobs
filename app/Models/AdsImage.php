<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdsImage extends Model
{
    protected $fillable = ['name','website_id'];

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
