<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'number' => '232',
            'icon' => 'icofont-simple-smile',
            'description' => 'Happy Clients',
        ]);
        DB::table('facts')->insert([
            'number' => '521',
            'icon' => 'icofont-document-folder',
            'description' => 'Projects',
        ]);
        DB::table('facts')->insert([
            'number' => '1463',
            'icon' => 'icofont-live-support',
            'description' => 'Hours of Support',
        ]);
        DB::table('facts')->insert([
            'number' => '15',
            'icon' => 'icofont-users-alt-5',
            'description' => 'Hard Workers',
        ]);
    }
}
