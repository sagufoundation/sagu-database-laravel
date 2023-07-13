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
            $table->foreignId('program_id')->nullable();
            $table->foreignId('province_id')->nullable();
            
            // biography
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('slug')->unique()->nullable(); // slug dibuat dari nama lengkap
            
            // profile
            $table->longText('profile')->nullable();

            // birth
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            
            // pictures
            $table->string('picture')->nullable();
            $table->string('ktp')->nullable();

            // contact info
            $table->string('phone')->unique()->nullable();

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
