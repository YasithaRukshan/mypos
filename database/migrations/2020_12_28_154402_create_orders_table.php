<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('complete')->default(0);
            $table->decimal('cost', 10, 2)->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->integer('discount')->default(0);
            $table->integer('cachier')->nullable()->unsigned();
            $table->integer('barcode_id')->nullable()->unsigned();
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
        Schema::dropIfExists('orders');
    }
}
