<?php

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();


        $permissions = array(
            array(
                'name'      => 'manage_all',
                'display_name'      => 'manage everything'
            ),
            array(
                'name'      => 'manage_profile',
                'display_name'      => 'manage profile'
            ),
        );

        DB::table('permissions')->insert( $permissions );

        DB::table('permission_role')->delete();

        $permissions = array(
            array(
                'role_id'      => 1,
                'permission_id' => 1
            ),
            array(
                'role_id'      => 2,
                'permission_id' => 2
            ),
        );

        DB::table('permission_role')->insert( $permissions );
    }

}
