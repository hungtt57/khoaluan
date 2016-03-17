<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
             $table->increments('id');
            $table->timestamps();
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');
            $table->string('tensp');
            $table->decimal('giasp');
            $table->decimal('tongtien');
            $table->integer('soluong');
            $table->string('anh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_detail');
    }
}
