<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 100);
            $table->tinyInteger('rate')->default(1);
            $table->float('price', 10, 2)->nullable();
            $table->integer('quantity');
            $table->date('start_date');
            $table->date('start_sale_date');
            $table->text('description');
            $table->bigInteger('category_id');
            $table->bigInteger('user_id');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
