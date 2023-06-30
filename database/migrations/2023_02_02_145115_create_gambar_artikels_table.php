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
        Schema::create('gambar_artikels', function (Blueprint $table) {
            $table->id();
           
            $table->string('keterangan')->nullable();
            $table->string('image');
            $table->integer('status');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->unsignedBigInteger('artikel_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambar_artikels');
    }
};
