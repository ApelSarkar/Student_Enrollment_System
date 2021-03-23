<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('Student_id',11);
            $table->string('Student_name',255);
            $table->string('Student_roll',255);
            $table->string('Student_fathersname',255);
            $table->string('Student_mothersname',255);
            $table->string('Student_email',255);
            $table->string('Student_phone',255);
            $table->string('Student_address',255);
            $table->string('Student_image',255);
            $table->string('Student_password',255);
            $table->string('Student_department',255);
            $table->string('Student_admissionyear',255);
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
        Schema::dropIfExists('student');
    }
}
