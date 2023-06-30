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
        Schema::create('link_terkaits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author')->unsigned()->nullable();
            $table->string('judul_link')->nullable();
            $table->string('slug')->nullable();
            $table->string('gambar')->nullable();
            $table->string('url')->nullable();
            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();

            $table->softDeletes();
            $table->timestamps();
            $table->foreign('author')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_terkaits');
    }
};
