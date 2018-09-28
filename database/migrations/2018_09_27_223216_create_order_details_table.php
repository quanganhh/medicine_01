<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('order_detail', function (Blueprint $table) 
        {
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->string('product_name');
            $table->string('product_image');
            $table->integer('quantity')->unsigned();
            $table->float('total_price', 10, 2)->unsigned();
            $table->text('note');
            $table->tinyInteger('status')->default(1);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign([
            'product_id',
            'order_id',
        ]);
        Schema::dropIfExists('order_detail');
    }
}
