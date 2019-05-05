<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductAmount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_amounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('amount_left');
            $table->string('amount_type');
            $table->unsignedBigInteger('unit_bunch');
            $table->unsignedBigInteger('total');
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
        Schema::dropIfExists('product_amounts');
    }
}
