<?php

namespace Database\Seeders\Library;

use App\Models\Library\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([ 'name' => 'Robin Hood']);
        Author::create([ 'name' => 'Felix Hood']);
        Author::create([ 'name' => 'Juan Hood']);
    }
}
