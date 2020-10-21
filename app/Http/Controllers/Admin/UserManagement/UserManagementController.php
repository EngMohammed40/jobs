<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\UserManagment\StoreAdminRequest;
use App\Http\Requests\Admin\UserManagment\UpdateAdminRequest;
use App\Models\Admin;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $admins = Admin::latest()->where('id', '!=', '1')->get();
        $roles = Role::all();
        return view('admin.pages.user-management.index', compact('admins', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAdminRequest $request
     * @return void
     */
    public function store(StoreAdminRequest $request)
    {
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $admin->assignRole($request->role);

        session()->flash('success', 'Data Added');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAdminRequest $request
     * @param $id
     * @return Response
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->has('password') ? Hash::make($request->password) : $admin->password,
        ]);

        if ($admin->role_name != $request->role) {
            $admin->removeRole($admin->role_name);
            $admin->assignRole($request->role);
        }

        session()->flash('success', 'Data Updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Admin $admin
     * @return Response
     * @throws Exception
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        session()->flash('success', 'Data Deleted');
        return back();
    }
}
