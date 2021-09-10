<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('price')->nullable()->change();
            $table->bigInteger('category_id')->change();
            $table->bigInteger('user_id')->change();
            $table->integer('status')->default('0')->change();
            $table->integer('rate')->default('1')->after('name');
            $table->date('start_sale_date')->after('start_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
