<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $customerRole = new Role;
        $customerRole->name = 'customer';
        $customerRole->save();

		$adminRole = Role::where('name', '=', 'admin')->first();
		$customerRole = Role::where('name', '=', 'customer')->first();
				
		for ($i=3 ; $i<=23 ; $i++) {
			$user = User::find($i);
			$user->attachRole( $customerRole );
		}
		
		$user = User::where('username','=','klaush')->first();
      	$user->attachRole( $adminRole );
		$user = User::where('username','=','mike.mle@gmail.com')->first();
		$user->attachRole( $adminRole );
    }

}
