<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('student_id');
            $table->string('student_name');
            $table->integer('age');
            $table->string('nickname');
            $table->string('hobby');
            $table->date('birthday');
            $table->string('ambition');
            $table->string('parents_id');
            $table->string('class_id');
            $table->string('mykid_number');
            $table->string('allergies');
            $table->double('height');
            $table->double('weight');
            $table->double('bmi');
            $table->string('blood_type');
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
