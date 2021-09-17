<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProducts extends Migration
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
            $table->integer('sale_off')->default(0);
            $table->bigInteger('user_id')->after('id'); 
            $table->bigInteger('category_id')->after('id');
            $table->boolean('is_public')->default(1)->after('sold');
            
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
            $table->dropColumn(['sale_off', 'user_id', 'category_id','is_public']);
        });
    }
}
