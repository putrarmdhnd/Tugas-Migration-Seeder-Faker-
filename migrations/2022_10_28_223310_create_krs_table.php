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
        Schema::create('krs', function (Blueprint $table) {
            $table->integer('id');
            $table->char('npm',10);
            $table->char('kode_matakuliah',8);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();

            $table->foreign('npm')->references('npm')->on('mahasiswas');
            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliahs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
};
