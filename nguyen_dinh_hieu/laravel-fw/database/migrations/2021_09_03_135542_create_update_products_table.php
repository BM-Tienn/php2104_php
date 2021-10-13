<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('update_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('rate')->default(1);
            $table->float('price')->nullable();
            $table->integer('quantity');
            $table->date('start_date');
            $table->date('start_sale_date');
            $table->text('description');
            $table->bigInteger('category_id');
            $table->bigInteger('user_id');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('update_products');
    }
}
