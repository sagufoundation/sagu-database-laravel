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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();

            $table->string('judul')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->mediumText('konten')->nullable();
            $table->mediumText('konten_singkat')->nullable();
            $table->string('gambar')->nullable();
            $table->enum('status',['Publish','Draft','Revisi','Verifikasi'])->default('Draft')->nullable();
            $table->string('ket_verfikasi')->nullable();
            $table->string('ket_revisi')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('kategori_beritas')->onUpdate('cascade')->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
};
