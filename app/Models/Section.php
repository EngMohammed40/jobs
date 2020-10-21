<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Section extends Model
{
       protected $fillable = ['name','slug','image','parent_id'];


    public function subsection(){

        return $this->hasMany('App\Models\Section', 'parent_id');

    }

    public function parent(){

        return $this->belongsTo('App\Models\Section', 'parent_id');

    }

    public function websites()
    {
        return $this->belongsToMany(Website::class,'websites_sections');
    }
}
