<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $buyerRole = Role::create([
            'name' => 'buyer'
        ]);

        $user = User::create([
            'name' => 'agustini',
            'username' => 'agstini',
            'alamat' => 'batam',
            'nohp' => '081233456965',
            'email' => 'agustini@owner.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole($ownerRole);
    }
}
