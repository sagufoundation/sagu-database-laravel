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
        Schema::create('kategori_beritas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('kategori_slug')->nullable();
            $table->string('deskripsi')->nullable();
            $table->bigInteger('author')->unsigned()->nullable();
            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();
            $table->softDeletes();
            $table->timestamps();
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
        Schema::dropIfExists('kategori_beritas');
    }
};
