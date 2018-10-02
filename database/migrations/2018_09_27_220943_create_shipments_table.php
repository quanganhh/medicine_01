<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
	{
        Schema::create('shipments', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('type')->unique();
            $table->float('cost', 10, 2)->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('shipments');
    }
}
