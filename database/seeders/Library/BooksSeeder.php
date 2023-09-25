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

                'cover' => '0.jpg',
                'title' => 'Book Title One',
                'status' => 'Publish',

            ]
        );
        Books::create(
            [

                'cover' => '0.jpg',
                'title' => 'Book Title Two',
                'status' => 'Publish',

            ]
        );
        Books::create(
            [

                'cover' => '0.jpg',
                'title' => 'Book Title Three',
                'status' => 'Draft',

            ]
        );
    }
}
