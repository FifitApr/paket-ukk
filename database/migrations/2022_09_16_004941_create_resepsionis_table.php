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
        Schema::create('resepsionis', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_cekin');
            $table->string('tgl_cekout');
            $table->string('jml_kamar');
            $table->string('nm_pemesan');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nm_tamu');
            $table->string('tipekamar');
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
        Schema::dropIfExists('resepsionis');
    }
};
