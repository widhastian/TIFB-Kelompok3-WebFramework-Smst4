<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kembali', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kembali')->constrained('kembali')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_buku')->constrained('buku')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('detail_kembali');
    }
};