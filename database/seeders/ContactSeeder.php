<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contacts')->insert([
            'email' => 's2010614@usls.edu.ph',
            'phone' => '+63 34 434 6100',
            'address' => 'La Salle Avenue, Bacolod City 6100, Negros Occidental, Philippines',
            'github' => 'https://github.com/KleinRhee',
        ]);
    }
}