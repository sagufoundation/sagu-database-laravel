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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

           // biography
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('job_title')->nullable();

            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('picture')->nullable();
            $table->string('slug')->nullable();

            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
