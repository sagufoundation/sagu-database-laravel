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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('catagory_id');

            $table->string('cover')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('total')->nullable();
            // other
            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('authors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('catagory_id')->references('id')->on('catagories')->onUpdate('cascade')->onDelete('cascade');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
