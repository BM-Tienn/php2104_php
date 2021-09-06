<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 100);
            $table->float('price', 10, 2)->nullable();
            $table->float('price_sale', 10, 2)->nullable();
            $table->text('image');
            $table->text('description');
            $table->integer('quantity');
            $table->tinyInteger('status');
            $table->text('classify'); 
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
        Schema::dropIfExists('shop_products');
    }
}
