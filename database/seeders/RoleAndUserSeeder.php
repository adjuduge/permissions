<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        "name"=> "admin",
        "email" => "admin@gmail.com",
        "password" => bcrypt("123456")
        ]);
        $admin->assignRole('admin');

        $yazar = User::create([
        "name" => "yazar",
        "email" => "yazar@gmial.com",
        "password" => bcrypt("123456")
        ]);
        $yazar->assignRole('yazar');

        $kullanici = User::create([
        "name" => "kullanıcı",
        "email" => "kullanici@gmial.com",
        "password" => bcrypt("123456")
        ]);
        $kullanici->assignRole('kullanıcı');

    }
}
