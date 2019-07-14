<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
            $table->string('rfc');
            $table->string('brand');
            $table->string('website');
            $table->text('description');
            $table->string('website');   
            $table->string('bank');
            $table->string('bankAccount');
            $table->string('accountNumberClabe');
            $table->string('street');
            $table->string('noExt');
            $table->string('noInt');
            $table->string('municipality');
            $table->string('town');
            $table->string('state');
            $table->string('isActive');
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
        Schema::dropIfExists('sellers');
    }
}
