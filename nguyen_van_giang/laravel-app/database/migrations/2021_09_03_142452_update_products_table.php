<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('price')->nullable()->change(); // update type from integer to float
            $table->integer('sale_off')->default(0); // add more sale_off column
            $table->bigInteger('user_id')->after('id'); // add more user_id column
            $table->bigInteger('category_id')->after('id'); // add more category_id column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price')->nullable()->change();
            $table->dropColumn(['sale_off', 'user_id', 'category_id']);
        });
    }
}
