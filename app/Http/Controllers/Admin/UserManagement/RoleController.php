<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserManagment\StoreRoleRequest;
use App\Http\Requests\Admin\UserManagment\UpdateRoleRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.pages.user-management.role', compact('roles', 'permissions'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRoleRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRoleRequest $request)
    {
        Role::create([
            'name' => $request->name,
            'guard_name' => 'admin'
        ]);
        session()->flash('success', 'Data Created');
        return back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $name
     * @return RedirectResponse
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update(['name' => $request->name]);
        session()->flash('success', 'Data updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $name
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        session()->flash('success', 'Data Deleted');
        return back();
    }
}
