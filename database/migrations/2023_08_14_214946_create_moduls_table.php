<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->id('id_modul')->autoIncrement();
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_kategori')->references('id_kategori')->on('kategoris');
            $table->string('nama_modul',100);
            $table->string('gambar_modul')->default('');
            $table->string('download_modul')->default('');
            $table->text('isi_modul',1000);
            $table->text('isiteaser_modul',1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kategoris',function(Blueprint $table){
            $table->dropForeign('kategori_id_modul_foreign');
        });
        Schema::dropIfExists('modul');
    }
};
