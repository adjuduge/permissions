<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissions = array(
            "admin"
        );

        $admin_role = Role::create(["name" => "Admin"]);
        $admin_role->givePermissionTo($admin_permissions);

        $yazar_permissions = array (
        "yazar"
        );
        $yazar_role = Role::create(["name" => "Yazar"]);
        $yazar_role->givePermissionTo($yazar_permissions);

        $kullanici_permissions = array(
        "kullanıcı"
        );
        $kullanici_role = Role::create(["name" => "Kullanıcı"]);
        $kullanici_role->givePermissionTo($kullanici_permissions);
    }
}
