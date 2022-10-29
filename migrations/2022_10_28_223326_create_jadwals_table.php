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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->integer('id',10);
            $table->char('kode_matakuliah',8);
            $table->char('nidn', 10);
            $table->char('kelas',1);
            $table->string('hari',10);
            $table->timestamp('jam')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();

            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliahs');
            $table->foreign('nidn')->references('nidn')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
};
