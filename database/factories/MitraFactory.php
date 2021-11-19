<?php

namespace Database\Factories;

use App\Models\Mitra;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class MitraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mitra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $instansi = ['yayasan', 'cv', 'pemerintah','jasaKeuangan','internasional'];
        return [
            'instansi' => $instansi[rand(0,4)],
            'nama_instansi' => $this->faker->name(),
            'no_mou_uns' => Str::random(10),
            'no_mou_mitra' => Str::random(10),
            'ruang_lingkup' => $this->faker->name(),
            'jangka_waktu_awal' => now(),
            'jangka_waktu_akhir' => now(),
            'pejabat_penandatangan' => $this->faker->name(),

        ];
    }
}
