<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $baseUrl = env('APP_URL', 'lara-vercel-one.vercel.app') . '/posters/';

        Movie::create([
            'title' => 'Inception',
            'publishing_year' => 2010,
            'poster' => $baseUrl . 'movie_1.png'
        ]);

        Movie::create([
            'title' => 'The Matrix',
            'publishing_year' => 1999,
            'poster' => $baseUrl . 'movie_2.png'
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'publishing_year' => 2014,
            'poster' => $baseUrl . 'movie_3.png'
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'publishing_year' => 2008,
            'poster' => $baseUrl . 'movie_4.png'
        ]);

        Movie::create([
            'title' => 'Pulp Fiction',
            'publishing_year' => 1994,
            'poster' => $baseUrl . 'movie_5.png'
        ]);

        Movie::create([
            'title' => 'The Lord of the Rings',
            'publishing_year' => 2001,
            'poster' => $baseUrl . 'movie_6.png'
        ]);

        Movie::create([
            'title' => 'The Godfather',
            'publishing_year' => 1972,
            'poster' => $baseUrl . 'movie_7.png'
        ]);
    }
}


