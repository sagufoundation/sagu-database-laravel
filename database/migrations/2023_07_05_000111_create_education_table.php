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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->nullable();

            $table->string('year')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->longText('google_docs_url')->nullable();

            $table->enum('type', ['Formal', 'Non Formal'])->default('Formal')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
};
