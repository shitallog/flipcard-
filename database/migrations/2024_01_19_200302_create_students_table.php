<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
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
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('last_name');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('adhar_number');
            $table->string('category');
            $table->string('course');
            $table->text('address');
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
        Schema::dropIfExists('students');
    }
}
