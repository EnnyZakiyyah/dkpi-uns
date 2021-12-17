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

            'judul' => $this->faker->sentence(2),
            // 'slug'=> $this->faker->sentence(3),
            'gambar' => $this->faker->mimeType(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                        ->map(function($p){
                            return"<p>$p</p>";
                        })->implode(''),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10)))).'</p>',
            // 'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
            //             ->map(fn ($p) => "<p>$p</p>"),
            //     ->implode(''),
            'published_at' => $this->faker->dateTime(),
            // 'link'=> $this->faker->domainName()
        ];
    }
}
