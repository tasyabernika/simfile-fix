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
        Schema::create('sif_biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();    
            $table->string('nama');
            $table->string('tempat');
            $table->date('tanggal_lahir');
            $table->integer('no_telfon');
            $table->string('daftar_suara');
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
        Schema::dropIfExists('sif_biodatas');
    }
};
