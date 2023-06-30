<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SliderrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

 

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'subtitle'  => $this->faker->sentence(100),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true),
            'status' => $this->faker->randomElement(['1', '0']),
        ];
    }
}
