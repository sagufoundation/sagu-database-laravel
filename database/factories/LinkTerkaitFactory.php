<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LinkTerkait>
 */
class LinkTerkaitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $judul_link = $this->faker->sentence(5);
        return [
            'judul_link'    => $judul_link,
            'slug'          => Str::slug($judul_link) ,
            'gambar'         => $this->faker->randomElement(['gambar/link-terkait/00.jpg']),
            'url'           => $this->faker->randomElement(['https://nokensoft.com']),
            'status'        => $this->faker->randomElement(['publish']),
        ];
    }
}
