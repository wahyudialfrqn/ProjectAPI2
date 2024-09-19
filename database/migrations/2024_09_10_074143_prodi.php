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
        Schema::create('prodis', function (Blueprint $table) {
        $table->uuid('id')->primary('id');
        $table->string('name',50);
        $table->timestamps();
        $table->uuid('falkutas');
        $table->foreign('falkutas')->references('id')->on('falkutas')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {


    }
};
