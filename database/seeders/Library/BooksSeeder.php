<?php

namespace Database\Seeders\Library;

use App\Models\Library\Book;
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
        Book::create(
            [
                'author_id' => 1,
                'catagory_id' => 2,
                'cover' => 'images/books/the-merry-adventures-of-robin-hood.png',
                'title' => 'The Merry Adventures of Robin Hood',
                'slug' => 'the-merry-adventures-of-robin-hood',
                'status' => 'Publish',
                'total' => 20

            ]
        );

        Book::create(
            [
                'author_id' => 2,
                'catagory_id' => 1,
                'cover' => 'images/books/killer-bees.png',
                'title' => 'Killer Bess',
                'slug' => 'killler-bess',
                'status' => 'Publish',
                'total' => 20
            ]
        );

        Book::create(
            [
                'author_id' => 1,
                'catagory_id' => 2,
                'cover' => 'images/books/rintisan-strategi-belajar-dari-kegagalan.png',
                'title' => 'Rintisan Strategi Belajar Dari Kegagalan',
                'slug' => 'runtisan-strategi',
                'status' => 'Publish',
                'total' => 20
            ]
        );

        Book::create(
            [
                'author_id' => 2,
                'catagory_id' => 1,
                'cover' => 'images/books/sains-dalam-olahraga-4.png',
                'title' => 'Sains Dalam Olahraga 4',
                'slug' => 'sains-dalam-olahraga-4',
                'status' => 'Draft',
                'total' => 20
            ]
        );

        Book::create(
            [
                'author_id' => 1,
                'catagory_id' => 2,
                'cover' => 'images/books/the-mind-map.png',
                'title' => 'The Main Map',
                'slug' => 'the-main-map',
                'status' => 'Publish',
                'total' => 20
            ]
        );

    }
}
