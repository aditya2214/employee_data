<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeSkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employe_skills')->delete();
        
        \DB::table('employe_skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'skill_name' => 'PHP Programing lenguage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'skill_name' => 'Java Programing lenguage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'skill_name' => 'Instalasi Jaringan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'skill_name' => 'Instalasi Komputer',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}