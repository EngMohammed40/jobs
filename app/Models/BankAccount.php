<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BankAccount extends Model
{
    protected $fillable = ['bank','ipan','account_number','account_owner'];

    use SoftDeletes;
}
