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
            'Release'=> 1955,
            'director'=>"Sacha GUITRY",
            'synopsis'=>"Napoléon is a 1955 French historical epic film directed by Sacha Guitry that depicts major events in the life of Napoleon.",
        ]);
        DB::table('movies')->insert([
            'Title' => "Napoléon",
            'Release'=> 2002,
            'director'=>"Yves Simoneau",
            'synopsis'=>"Napoleon is a 2002 historical miniseries which explored the life of Napoleon Bonaparte.",
        ]);
        DB::table('movies')->insert([
            'Title' => "Napoléon",
            'Release'=> 2023,
            'director'=>"Ridley Scott",
            'synopsis'=>"Based on the story of Napoleon Bonaparte, primarily depicting the French leader's rise to power as well as his relationship with Empress Joséphine.",
        ]);
        DB::table('movies')->insert([
            'Title' => "Sharknado",
            'Release'=> 2013,
            'director'=>"Anthony C. Ferrante",
            'synopsis'=>"It tells about a waterspout that lifts sharks out of the ocean and deposits them in Los Angeles.",
        ]);
        DB::table('movies')->insert([
            'Title' => "Mega Shark Versus Giant Octopus",
            'Release'=> 2009,
            'director'=>"Ace Hannah",
            'synopsis'=>"The film is about the hunt for two prehistoric sea-monsters causing mayhem and carnage at sea.",
        ]);
        DB::table('movies')->insert([
            'Title' => "Sharktopus Vs Pteracuda",
            'Release'=> 2014,
            'director'=>"Kevin O'Neill",
            'synopsis'=>"Marine biologist Lorena Christmas discovers an egg sac containing a baby Sharktopus in the ocean.",
        ]);
    }
}

