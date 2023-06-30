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
        Schema::create('informasi_lingkungans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author')->unsigned()->nullable();
            $table->string('judul')->nullable();
            $table->string('slug')->nullable();
            $table->string('keterangan_singkat')->nullable();
            $table->longText('keterangan_lengkap')->nullable();
            $table->string('gambar')->nullable();
            $table->string('url')->nullable();
            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('author')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi_lingkungans');
    }
};
