<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->integer('jumlah_orang');
            $table->string('unit_kerja');
            $table->date('jangka_waktu_awal');
            $table->date('jangka_waktu_akhir');
            $table->string('tujuan');
            $table->string('negara');
            $table->string('surat_uns');
            $table->text('catatan_uns');
            $table->string('sdi_dikti');
            $table->text('catatan_sdi');
            $table->string('ktln_kemensetneg');
            $table->text('catatan_setneg');
            $table->string('file_surat_uns');
            $table->string('file_sdi');
            $table->string('file_ktln');
            $table->string('status_hidden');
            $table->string('status');
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
        Schema::dropIfExists('dosens');
    }
}
