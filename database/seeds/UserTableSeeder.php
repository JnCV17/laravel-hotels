<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'client')->first();
        $role_manager  = Role::where('name', 'administrator')->first();
        $employee = new User();
        $employee->name = 'client Name';
        $employee->email = 'client@example.com';
        $employee->username = 'client';
        $employee->password = bcrypt('test1');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $manager = new User();
        $manager->name = 'Admin';
        $manager->email = 'admin@example.com';
        $manager->username = 'admin';
        $manager->password = bcrypt('test1');
        $manager->save();
        $manager->roles()->attach($role_manager);
  }
}
