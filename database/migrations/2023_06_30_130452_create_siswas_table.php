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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            
            // birth
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            
            // pictures
            $table->string('profile_picture')->nullable();
            $table->string('ktp')->nullable();

            // contact info
            $table->string('phone')->unique();
            $table->string('email')->unique();

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
        Schema::dropIfExists('siswas');
    }
};
