<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('o_id')->unsigned();
            $table->integer('p_id')->unsigned();
            $table->decimal('qty', 10, 2)->default(0);
            $table->integer('unit_type_id')->default(0);
            $table->decimal('discount', 10, 2)->default(0);
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
        Schema::dropIfExists('oders_data');
    }
}
