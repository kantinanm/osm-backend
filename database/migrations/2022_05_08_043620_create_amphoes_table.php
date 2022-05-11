<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmphoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amphoes', function (Blueprint $table) {
            $table->id();
            $table->integer('gid');
            $table->string('ap_code')->nullable($value = true)->default("");
            $table->string('ap_tn')->nullable($value = true)->default("");
            $table->string('ap_en')->nullable($value = true)->default("");
            $table->string('pv_tn')->nullable($value = true)->default("");
            $table->string('pv_en')->nullable($value = true)->default("");
            $table->string('re_nesdb')->nullable($value = true)->default("");
            $table->string('re_royin')->nullable($value = true)->default("");
            $table->decimal('areashape')->nullable($value = true)->default(0);
            $table->integer('admin_type');
            $table->string('geom')->nullable($value = true)->default("");
            $table->timestamps();
            

            /* 
            gid  int
            id   num
            ap_code   string 4
            ap_tn     string 60
            ap_en     string 50
            pv_code   string 2
            pv_tn     string 50
            pv_en     string 50
            re_nesdb  string 50
            re_royin  string 50
            areashape double 
            admin_type  smallint
            geom  geometry
            */



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amphoes');
    }
}
