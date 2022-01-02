<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit profile']);

        //CRUD
        Permission::create(['name' => 'index crud']);
        Permission::create(['name' => 'create crud']);
        Permission::create(['name' => 'edit crud']);
        Permission::create(['name' => 'delete crud']);
        Permission::create(['name' => 'show crud']);

        //Table
        Permission::create(['name' => 'index table']);
        Permission::create(['name' => 'create table']);
        Permission::create(['name' => 'edit table']);
        Permission::create(['name' => 'delete table']);
        Permission::create(['name' => 'show table']);
    }
}
