<?php

namespace Database\Factories;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengaduanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pengaduan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=> $this->faker->name(),
            'subject'=> $this->faker->name(),
            'message'=> $this->faker->sentence(3),
            'email'=> $this->faker->unique()->safeEmail(),
            'isRead'=> 0
        ];
    }
}
