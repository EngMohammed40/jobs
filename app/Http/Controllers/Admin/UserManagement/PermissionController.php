<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'permissions' => 'required'
        ];

        $this->validate($request, $rules);

        Artisan::call('cache:forget', ['key' => 'spatie.permission.cache']);

        $role = Role::findById($id);

        $permissions = $request->permissions;

        DB::table('role_has_permissions')->where('role_id', $id)->delete();

        $role->syncPermissions($permissions);

        Artisan::call('cache:forget', ['key' => 'spatie.permission.cache']);

        session()->flash('success', 'Data Updated');

        return back();
    }

}
