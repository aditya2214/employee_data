<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departements')->delete();
        
        \DB::table('departements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'departemen_name' => 'IT Programer',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'departemen_name' => 'IT Infrastruksur',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}