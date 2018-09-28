<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('shipping_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->integer('order_status_id')->unsigned();
            $table->float('total_price', 20, 2)->unsigned();
            $table->string('address')->nullable();
            $table->string('ship_date')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shipping_id')->references('id')->on('shipping')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment_method')->onDelete('cascade');
            $table->foreign('order_status_id')->references('id')->on('order_status')->onDelete('cascade');
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
            'user_id',
            'shipping_id',
            'payment_id',
            'order_status_id',
        ]);
        Schema::dropIfExists('orders');
    }
}
