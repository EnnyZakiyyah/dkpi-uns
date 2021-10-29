<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('no_mou_uns');
            $table->string('no_mou_mitra');
            $table->string('ruang_lingkup');
            $table->string('jangka_waktu_awal');
            $table->string('jangka_waktu_akhir');
            $table->string('pejabat_penandatangan');
            $table->string('file_mou');
            $table->string('status_hidden');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_v_s');
    }
}
