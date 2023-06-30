<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LayananOnline>
 */
class LayananOnlineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul'                 => $this->faker->randomElement(['Judul Sistem']),
            'keterangan_singkat'    => $this->faker->text(),
            'keterangan_lengkap'    => $this->faker->text(),
            'gambar'                => $this->faker->randomElement(['gambar/layanan-online/00.jpg']),
            'url'                   => $this->faker->randomElement(['https://sipakot.jayapurakota.go.id']),
            'status'                => $this->faker->randomElement(['publish']),
        ];
    }
}
