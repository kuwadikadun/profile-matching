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
        Schema::create('wawancaras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lamaran');
            $table->unsignedBigInteger('id_jadwalWawancara');    
            $table->unsignedBigInteger('id_user');
            $table->integer('ketegasan');
            $table->integer('atitude');
            $table->integer('grooming');
            $table->integer('total');
       
            $table->foreign('id_lamaran')->references('id')->on('lamarans')->onDelete('cascade');
            $table->foreign('id_jadwalWawancara')->references('id')->on('jadwal_wawancaras')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('wawancaras');
    }
};
