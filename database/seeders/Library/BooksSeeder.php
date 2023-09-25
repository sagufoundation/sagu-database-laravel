<?php

namespace Database\Seeders\Library;

use App\Models\Library\Books;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Books::create(
            [

                'cover' => 'images/books/the-merry-adventures-of-robin-hood.png',
                'title' => 'The Merry Adventures of Robin Hood',
                'author' => 'Howard Pyle',
                'status' => 'Publish',

            ]
        );

        Books::create(
            [

                'cover' => 'images/books/killer-bees.png',
                'title' => 'Killer Bess',
                'author' => 'Jane Rollason',
                'status' => 'Publish',

            ]
        );

        Books::create(
            [

                'cover' => 'images/books/rintisan-strategi-belajar-dari-kegagalan.png',
                'title' => 'Rintisan Strategi Belajar Dari Kegagalan',
                'author' => 'Hustler',
                'status' => 'Publish',

            ]
        );

        Books::create(
            [

                'cover' => 'images/books/sains-dalam-olahraga-4.png',
                'title' => 'Sains Dalam Olahraga 4',
                'author' => 'Hustler',
                'status' => 'Draft',

            ]
        );

        Books::create(
            [

                'cover' => 'images/books/the-mind-map.png',
                'title' => 'The Main Map',
                'author' => 'Hustler',
                'status' => 'Publish',

            ]
        );

    }
}
