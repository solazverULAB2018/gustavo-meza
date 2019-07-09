<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('extra_id');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();

            $table->foreign('extra_id')->references('id')->on('extras');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_order');
    }
}
