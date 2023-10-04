<?php

namespace Database\Seeders\Library;

use App\Models\Library\Catagories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CateegoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catagories::create([ 'name' => 'Fashion','slug' => 'fashion','description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."]);

        Catagories::create([ 'name' => 'Health','slug' => 'health','description' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."]);

        Catagories::create([ 'name' => 'Natural','slug' => 'natural','description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s"]);

        Catagories::create([ 'name' => 'Education','slug' => 'education','description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."]);
    }
}
