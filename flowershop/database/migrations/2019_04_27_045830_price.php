<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Price extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('unit_in_USD', 8, 2);
            $table->double('current_price', 8, 2);
            $table->string('currency');
            $table->double('sale', 4, 2);
            $table->double('special_sale', 4, 2);
            $table->unsignedBigInteger('number_urchase_for_special_sale');
            $table->double('previous_price_unit', 8, 2);
            $table->double('future_price_unit', 8, 2);
            $table->dateTime('future_price_unit_start_time');
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
        Schema::dropIfExists('prices');
    }
}
