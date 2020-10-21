<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permissions\HasPermissionsTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;


class Admin extends Authenticatable
{
    use Notifiable , HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getRoleNameAttribute() {
        $role_name = DB::table('roles')
            ->where('id', DB::table('model_has_roles')->where('model_id', $this->id)->first()->role_id)
            ->first()
            ->name;
        return $role_name;
    }

    public function getRoleIdAttribute() {
        $role_id = DB::table('roles')
            ->where('id',DB::table('model_has_roles')->where('model_id', $this->id)->first()->role_id)
            ->first()
            ->id;
        return $role_id;
    }

}
