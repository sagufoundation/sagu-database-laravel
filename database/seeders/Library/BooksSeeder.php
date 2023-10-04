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
                'summary' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
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
                'summary' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
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
                'summary' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
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
                'summary' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
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
                'summary' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'status' => 'Publish',
                'total' => 20
            ]
        );

    }
}
