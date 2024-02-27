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
        Schema::create('students', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('province_id')->nullable();

            // profile
            $table->longText('profile')->nullable();
            $table->string('gender')->nullable();

            // birth
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();

            // pictures
            $table->string('ktp')->nullable();

            // address
            $table->tinyText('province')->nullable();
            $table->tinyText('full_address')->nullable();

            // emails
            $table->string('email_google')->nullable(); // ...@gmail.com
            $table->string('email_outlook')->nullable(); // ...@outlook.com
            $table->string('email_sagu')->nullable(); // ...@sagufoundation.org
            $table->string('email_campus_1')->nullable(); // ...@campusname.com
            $table->string('email_campus_2')->nullable(); // ...@campusname.com

            // education
            $table->tinyText('education_history')->nullable();

            // documents
            $table->longText('doc_google_sheets')->nullable(); // google sheets

            $table->timestamps();
            $table->foreign('province_id')->references('id')->on('provinces')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
};
