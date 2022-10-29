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
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->char('kode_matakuliah', 8 );
            $table->string('nama_matakuliah', 50 );
            $table->integer('sks');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();

            $table->primary('kode_matakuliah');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliahs');
    }
};
