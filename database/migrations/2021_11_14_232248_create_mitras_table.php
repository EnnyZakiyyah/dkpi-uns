<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();

            $table->enum('instansi', ['yayasan', 'cv', 'internasional', 'jasaKeuangan', 'pemerintah']);
            $table->string('nama_instansi');
            $table->string('no_mou_uns');
            $table->string('no_mou_mitra');
            $table->text('ruang_lingkup');
            $table->string('jangka_waktu_awal');
            $table->string('jangka_waktu_akhir');
            $table->text('pejabat_penandatangan');
            $table->string('file_mou')->default('-');
            $table->string('status_hidden')->default('aktif');
            $table->string('status')->default('berlaku');
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
        Schema::dropIfExists('mitras');
    }
}
