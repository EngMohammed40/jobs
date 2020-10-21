<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Admin::create([
            'name' => 'الأدمن الرئيسى',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'username' => 'admin',
            'remember_token' => Str::random(40),
        ]);

        $permissions = [
            ['name' => 'access_user_management', 'name_ar' => 'عرض صلاحيات النظام', 'guard_name' => 'admin'],
            ['name' => 'access_roles', 'name_ar' => 'عرض الأدوار', 'guard_name' => 'admin'],
            ['name' => 'create_roles', 'name_ar' => 'إضافة الأدوار', 'guard_name' => 'admin'],
            ['name' => 'edit_roles', 'name_ar' => 'تعديل الادوار', 'guard_name' => 'admin'],
            ['name' => 'delete_roles', 'name_ar' => 'حذف الادوار', 'guard_name' => 'admin'],
            ['name' => 'access_admins', 'name_ar' => 'عرض المسئولين', 'guard_name' => 'admin'],
            ['name' => 'create_admins', 'name_ar' => 'إضافة المسئولين', 'guard_name' => 'admin'],
            ['name' => 'edit_admins', 'name_ar' => 'تعديل المسئولين', 'guard_name' => 'admin'],
            ['name' => 'delete_admins', 'name_ar' => 'حذف المسئولين', 'guard_name' => 'admin'],
        ];

        foreach ($permissions as $permission){
            Permission::create($permission);
        }

        Role::create(['name' => 'الادمن الرئيسى', 'guard_name' => 'admin']);
        Role::create(['name' => 'موظف', 'guard_name' => 'admin']);


        $admin_role = Role::find('1');
        $admin_role->syncPermissions(Permission::all());
        Admin::where('id', '1')->first()->assignRole(Role::find('1')->name);

    }
}
