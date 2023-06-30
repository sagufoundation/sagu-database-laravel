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
        Schema::create('halamen', function (Blueprint $table) {

            $table->id();

            $table->bigInteger('user_id')->unsigned()->nullable();

            $table->string('judul_halaman')->nullable();
            $table->string('sub_judul')->nullable();
            $table->string('slug')->nullable();
            $table->longText('konten_singkat')->nullable();
            $table->longText('konten')->nullable();
            $table->string('gambar')->nullable();

            $table->enum('status', ['Publish','Draft'])->default('Publish')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halamen');
    }
};
