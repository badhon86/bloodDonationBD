<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonarformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donarforms', function (Blueprint $table) {
            $table->id();
            $table->string('fist_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('birth_date');
            $table->string('blood_group');
            $table->string('address');
            $table->string('division');
            $table->string('district');
            $table->string('upozilla');
            $table->string('nationality');
            $table->string('email');
            $table->string('phone');
            $table->string('lastdonate');
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
        Schema::dropIfExists('donarforms');
    }
}
