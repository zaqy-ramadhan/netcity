<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id('id_kategori')->autoIncrement();
            $table->string('nama_kategori', 100);
            $table->timestamps();
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
