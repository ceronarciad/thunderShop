<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCharacteristicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_characteristic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sku');
            $table->string('description');
            $table->string('size');
            $table->string('color');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')
            ->references('id')->on('products');  
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
        Schema::dropIfExists('product_characteristic');
    }
}
