<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminAcc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_acc', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('password');
            $table->text('first_name');
            $table->date('age');
            $table->text('gender');
            $table->string('phone');
            $table->text('email');
            $table->text('address');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_acc');
    }
}
