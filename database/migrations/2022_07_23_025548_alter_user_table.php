<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table) {
            $table->string('name')->nullable(true)->change();
            $table->dropUnique(['email']);
            $table->string('email')->nullable(true)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function($table) {
            $table->string('name')->nullable($value = false)->change();
            $table->string('email')->unique()->nullable($value = false)->change();
        });

        Schema::dropIfExists('users');
    }
}
