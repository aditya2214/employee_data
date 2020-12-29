<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hBmJLIMaw0bO3uooyHG1tuCKOXVPWrlbCk.Xi01aQaHFKywrm78pK',
                'remember_token' => NULL,
                'created_at' => '2020-12-29 10:29:47',
                'updated_at' => '2020-12-29 10:29:47',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 0,
                'name' => 'employee',
                'email' => 'employee@employee',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xc.q0tl8.xbISfWAztusIegph6qaJTcz7rLwdkOc.sD51mYHxVoiO',
                'remember_token' => NULL,
                'created_at' => '2020-12-29 10:59:54',
                'updated_at' => '2020-12-29 10:59:54',
            ),
        ));
        
        
    }
}