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
        Catagories::create([ 'name' => 'Fasion']);
        Catagories::create([ 'name' => 'Healf']);
        Catagories::create([ 'name' => 'Naturaly']);
    }
}
