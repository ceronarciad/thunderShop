<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('description');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->unsignedBigInteger('id_gender');
            $table->foreign('id_gender')
            ->references('id')->on('genders');
            $table->boolean('isActive');
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
        Schema::dropIfExists('persons');
    }
}
