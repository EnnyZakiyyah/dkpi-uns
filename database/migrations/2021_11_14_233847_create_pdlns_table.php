<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdlnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdlns', function (Blueprint $table) {
            $table->id();

            $table->enum('jenis', ['mahasiswa', 'dosen', 'pimpinan']);
            $table->string('nama');
            $table->integer('jumlah_orang');
            $table->string('unit_kerja');
            $table->string('jangka_waktu_awal');
            $table->string('jangka_waktu_akhir');
            $table->text('tujuan');
            $table->string('negara');
<<<<<<< Updated upstream
            $table->string('surat_uns')->default('null');
            $table->text('catatan_uns');
            $table->string('belmawa')->default('null');
            $table->text('catatan_belmawa');
            $table->string('ktln_kemensetneg')->default('null');
            $table->text('catatan_setneg');
            $table->string('file_surat_uns')->default('null');
            $table->string('file_belmawa')->default('null');
            $table->string('file_ktln')->default('null');
            $table->string('status_hidden')->default('null');
            $table->string('status')->default('null');
=======
            $table->string('surat_uns')->nullable();
            $table->text('catatan_uns')->nullable();
            $table->string('belmawa')->nullable();
            $table->text('catatan_belmawa')->nullable();
            $table->string('ktln_kemensetneg')->nullable();
            $table->text('catatan_setneg')->nullable();
            $table->string('file_surat_uns')->nullable();
            $table->string('file_belmawa')->nullable();
            $table->string('file_ktln')->nullable();
            $table->string('status_hidden')->nullable();
            $table->string('status')->nullable();
>>>>>>> Stashed changes

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
        Schema::dropIfExists('pdlns');
    }
}
