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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();

            $table->string('program_title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('full_description')->nullable();

            $table->string('program_start')->nullable();
            $table->string('program_end')->nullable();

            // other
            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();

            $table->timestamps();
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
        Schema::dropIfExists('programs');
    }
};
