<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pertanyaan'            => $this->faker->randomElement(['Contoh pertanyaan']),
            'jawaban'               => $this->faker->randomElement(['Contoh jawaban dengan teks lebih banyak dari pertanyaannya.']),
            'status'                => $this->faker->randomElement(['publish']),
        ];
    }
}
