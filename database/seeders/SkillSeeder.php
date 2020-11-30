<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'language' => "HTML",
            'percentage' => "100"
        ]);
        DB::table('skills')->insert([
            'language' => "CSS",
            'percentage' => "90"
        ]);
        DB::table('skills')->insert([
            'language' => "JAVASCRIPT",
            'percentage' => "75"
        ]);
        DB::table('skills')->insert([
            'language' => "PHP",
            'percentage' => "80"
        ]);
        DB::table('skills')->insert([
            'language' => "WORDPRESS/CMS",
            'percentage' => "90"
        ]);
        DB::table('skills')->insert([
            'language' => "PHOTOSHOP",
            'percentage' => "55"
        ]);
    }
}
