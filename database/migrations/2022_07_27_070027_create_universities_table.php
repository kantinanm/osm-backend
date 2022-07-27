<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('_id');
            $table->string('univ_id')->unique();;
            $table->string('univ_name_th')->nullable();
            $table->string('univ_name_eng')->nullable();
            $table->string('univ_master')->nullable();
            $table->string('province_id')->nullable(); //00 zero format
            $table->string('univ_type_name')->nullable();
            $table->string('univ_group_name')->nullable();
            $table->string('univ_group_id')->nullable(); //00 zero format
            $table->integer('institute_type_id')->default(0);
            $table->string('institute_type_name')->nullable();
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
        Schema::dropIfExists('universities');
    }
}
