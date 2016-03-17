<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
           $table->increments('id');
            $table->timestamps();
            $table->date('ngaydatkh');
            $table->date('ngaynhankh');
            $table->string('tenkh');
            $table->string('sdtkh');
            $table->string('emailkh');
            $table->string('diachikh');
            $table->decimal('tongtien');
            $table->string('ghichukh');
            $table->string('trangthai');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }
}
