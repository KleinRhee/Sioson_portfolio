<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Laravel E-Portfolio',
                'description' => 'A dynamic, database-driven personal portfolio built with Laravel MVC structure.',
                'technologies' => 'Laravel, PHP, Bootstrap, MySQL',
                'link' => 'https://github.com/KleinRhee/Sioson_portfolio'
            ]
        ]);
    }
}