<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update3ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->tinyInteger('rate')->after('name');
            $table->integer('sold_out')->default(0)->after('quantity');
            $table->integer('sale_off')->default(0)->after('start_sale_date');
            $table->boolean('is_public')->default(1);
            $table->string('image')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->dropColum(['rate', 'sold_out', 'sale_off', 'is_public', 'image']);
        });
    }
}
