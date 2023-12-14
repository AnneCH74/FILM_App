<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'Title' => "Napoléon",
            'Release year'=> 2023,
            'director'=>"Ridley Scott",
            'synopsis'=>"Based on the story of Napoleon Bonaparte, primarily depicting the French leader's rise to power as well as his relationship with Empress Joséphine",
        ]);
    }
}

