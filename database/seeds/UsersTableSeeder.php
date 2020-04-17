<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define default users
    	$users = [
    		[
    			'name' => 'Jason Jaca',
    			'email' => 'jason@digicononline.com',
    			'password' => 'J4cKnp0y88',
    			'role_id' => 1 // super admin
    		],
    		[
    			'name' => 'Lourence John Cabaluna',
    			'email' => 'lourencejohn@digicononline.com',
    			'password' => 'Lcabalun0300',
    			'role_id' => 1 // super admin
    		],
    		[
    			'name' => 'TJ Jaca',
    			'email' => 'tjaca@digicononline.com',
    			'password' => 'fNdggN52',
    			'role_id' => 2 // admin
    		],
    		[
    			'name' => 'Francis Labitad',
    			'email' => 'flabitad@digicononline.com',
    			'password' => 'a3mw9tH5',
    			'role_id' => 3 // supervisor
    		]
    	];

    	// Create users
    	foreach ($users as $user) {
    		$u = new User;
    		$u->name = $user['name'];
    		$u->email = $user['email'];
    		$u->password = Hash::make($user['password']);
    		$u->role_id = $user['role_id'];
    		$u->save();
    	}
    }
}
