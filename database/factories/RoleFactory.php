<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(App\Role::class, function () {
     return [
        'name' => 'مشرف',
        'slug' =>'admin',
    ];
});
