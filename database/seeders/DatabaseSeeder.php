<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Faq;
use App\Models\User;
use App\Models\Mitra;
use App\Models\Pdln;
use App\Models\Pengaduan;
use App\Models\Pengumuman;
use App\Models\Peringkat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Mitra::factory(10)->create();
        Pdln::factory(10)->create();
        Berita::factory(10)->create();
        Pengumuman::factory(10)->create();
        Faq::factory(10)->create();
        Pengaduan::factory(10)->create();
        Peringkat::factory(10)->create();
    }
}
