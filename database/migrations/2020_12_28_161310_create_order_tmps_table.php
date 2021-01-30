<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tmps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('o_id')->unsigned();
            $table->integer('p_id')->unsigned();
            $table->decimal('qty')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oder_tmps');
    }
}
