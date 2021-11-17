<?php

namespace Database\Factories;

use App\Models\Pdln;
use Illuminate\Database\Eloquent\Factories\Factory;

class PdlnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pdln::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jenis = ['mahasiswa', 'dosen', 'pimpinan'];
        return [
            'jenis'=> $jenis[rand(0,2)],
            'nama' => $this->faker->name(),
            'jumlah_orang'=> rand(1,10),
            'unit_kerja'=>$this->faker->jobTitle(),
            'jangka_waktu_awal'=> now(),
            'jangka_waktu_akhir'=> now(),
            'tujuan'=> $this->faker->sentence(3),
            'negara'=> $this->faker->country(),
            'surat_uns'=> $this->faker->numerify(),
            'catatan_uns'=> $this->faker->sentence(3),
            'belmawa'=> $this->faker->numerify(),
            'catatan_belmawa'=> $this->faker->sentence(4),
            'ktln_kemensetneg'=> $this->faker->numerify(),
            'catatan_setneg'=> $this->faker->sentence(2),
            'file_surat_uns'=> $this->faker->mimeType(),
            'file_belmawa'=> $this->faker->mimeType(),
            'file_ktln'=> $this->faker->mimeType(),
            'status_hidden'=> 'good',
            'status'=> 'bad'
        ];
    }
}
