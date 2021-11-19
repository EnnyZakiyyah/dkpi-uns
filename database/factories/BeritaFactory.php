<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Berita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'judul'=> $this->faker->sentence(2),
            'slug'=> $this->faker->sentence(3),
            'isi'=> $this->faker->paragraph(2),
            'link'=> $this->faker->domainName()
        ];
    }
}
