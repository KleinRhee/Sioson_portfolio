<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'HTML & CSS', 'proficiency' => 90],
            ['name' => 'PHP & Laravel', 'proficiency' => 80],
            ['name' => 'JavaScript', 'proficiency' => 75],
            ['name' => 'Git & GitHub', 'proficiency' => 85],
        ]);
    }
}