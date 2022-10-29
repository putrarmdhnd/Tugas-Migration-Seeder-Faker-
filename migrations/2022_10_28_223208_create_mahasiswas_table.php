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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->char('npm',10);
            $table->char('nidn',10);
            $table->string('nama',50);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();

            $table->primary('npm');
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
        Schema::dropIfExists('mahasiswas');
    }
};
