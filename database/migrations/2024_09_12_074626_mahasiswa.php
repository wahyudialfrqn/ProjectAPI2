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
        Schema::create('Mahasiswas', function (Blueprint $table) {
            $table->uuid('id')->primary('id');
            $table->string('npm',10);
            $table->string('name',125);
            $table->date('tanggallahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->uuid('prodis');
            $table->timestamps();
        });
        Schema :: table ('Mahasiswas', function (Blueprint $table) {
            $table->foreign('prodis')->references('id')->on('prodis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Mahasiswas');
    }
};
