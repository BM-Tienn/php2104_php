<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductHistoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_history_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_history_id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity')->nullable();
            $table->text('description')->nullable();
            $table->float('price')->nullable();
            $table->integer('sale_off')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->boolean('is_public')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_history_details');
    }
}
