<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('period_id');
            $table->unsignedBigInteger('price_id');
            $table->unsignedBigInteger('product_amount_id');
            $table->unsignedBigInteger('feedback_id');
            $table->unsignedBigInteger('like_id');
            $table->unsignedBigInteger('rate_id');
            $table->unsignedBigInteger('picture_id');
            $table->string('name');
            $table->text('detailed_info')->nullable();
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
        Schema::dropIfExists('products');
    }
}
