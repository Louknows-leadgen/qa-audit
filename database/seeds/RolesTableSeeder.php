<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
        	['name'=>'Super Admin','short_desc'=>'Can create all types of users','uniqid'=>1],
        	['name'=>'Admin','short_desc'=>'Can create supervisor and auditor type of users','uniqid'=>2],
        	['name'=>'Supervisor','short_desc'=>'Supervisor type of user','uniqid'=>3],
        	['name'=>'Auditor','short_desc'=>'Auditor type of user','uniqid'=>4]
        ];

        //
        foreach ($roles as $role) {
        	$user_role = new Role;
        	$user_role->name = $role['name'];
        	$user_role->short_desc = $role['short_desc'];
        	$user_role->uniqid = $role['uniqid'];
        	$user_role->save();
        }
    }
}
