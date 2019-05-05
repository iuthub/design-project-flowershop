<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('sub_categories', function(Blueprint $table) {
	        $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
	    });
	    Schema::table('sub_sub_categories', function(Blueprint $table) {
	        $table->foreign('sub_id')->references('id')->on('sub_categories')->onDelete('cascade')->onUpdate('cascade');
	        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
	    });	
        Schema::table('products', function(Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('period_id')->references('id')->on('periods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_amount_id')->references('id')->on('product_amounts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('feedback_id')->references('id')->on('feedbacks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('like_id')->references('id')->on('likes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rate_id')->references('id')->on('rates')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('feedbacks', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('likes', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('rates', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('carts', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('orders', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	/*Schema::table('sub_categories', function(Blueprint $table) {
	        $table->dropForeign('cat_id');
	    });	
    	Schema::table('sub_sub_categories', function(Blueprint $table) {
	        $table->dropForeign('sub_id');
	        $table->dropForeign('product_id');
	    });	
        Schema::table('products', function(Blueprint $table) {
            $table->dropForeign('company_id');
            $table->dropForeign('color_id');
            $table->dropForeign('period_id');
            $table->dropForeign('price_id');
            $table->dropForeign('product_amount_id');
            $table->dropForeign('feedback_id');
            $table->dropForeign('like_id');
            $table->dropForeign('rate_id');
            $table->dropForeign('picture_id');
        });
        Schema::table('feedbacks', function(Blueprint $table) {
            $table->dropForeign('user_id');
        }); 
        Schema::table('likes', function(Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::table('rates', function(Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('card_id');
            $table->dropForeign('cart_id');
            $table->dropForeign('order_id');
        });
        Schema::table('carts', function(Blueprint $table) {
            $table->dropForeign('product_id');
        });
        Schema::table('orders', function(Blueprint $table) {
            $table->dropForeign('product_id');
        });*/        
    }
}
