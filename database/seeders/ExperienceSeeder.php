<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'type' => 'Education',
                'title' => 'Bachelor of Science in Computer Science',
                'organization' => 'University of St. La Salle - Bacolod',
                'duration' => '2022 - Present',
                'description' => 'Currently studying core computer science concepts and Web Development Technologies (CSP215A).'
            ],
            [
                'type' => 'Experience',
                'title' => 'Student Developer',
                'organization' => 'USLS Computer Lab',
                'duration' => '2025 - Present',
                'description' => 'Developing full-stack web applications using Laravel, MVC architecture, and database migrations.'
            ]
        ]);
    }
}