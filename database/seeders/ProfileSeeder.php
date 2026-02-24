<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profiles')->insert([
            'name' => 'Klein Rhee P. Sioson',
            'title' => 'Aspiring Web Developer & Computer Science Student',
            'bio' => 'I am a passionate BS Computer Science student at the University of St. La Salle.',
            'about_me' => 'I am 22 years old, highly interested in Web Development Technologies, and currently honing my skills in Laravel, PHP, and modern web frameworks.',
        ]);
    }
}