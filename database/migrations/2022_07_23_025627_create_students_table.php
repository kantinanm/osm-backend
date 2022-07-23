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

            $table->increments('st_id');
            $table->string('fullname')->nullable();;
            $table->string('student_id')->unique();
            $table->decimal('gpa')->default(0);
            $table->string('smiley')->nullable();
            $table->string('class')->nullable();
            $table->integer('is_owner')->default(0);
            $table->string('token')->nullable();
            $table->timestamps();

            $table->unsignedInteger('user_id')->nullable();;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('students');
    }
}
