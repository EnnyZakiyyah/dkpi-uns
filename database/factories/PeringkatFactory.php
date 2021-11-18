<?php

namespace Database\Factories;

use App\Models\Peringkat;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeringkatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Peringkat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jenis = ['THES', 'QSstar'];
        return [
            'jenis'=> $jenis[rand(0,1)],
            'peringkat'=> rand(30,100),
            'judul'=> $this->faker->sentence(2),
            'berita'=> $this->faker->paragraph(1),
            'link'=> $this->faker->domainName()
        ];
    }
}
