<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('category_id')->unsigned();
            $table->decimal('qty',10,2)->default(0);
            $table->integer('unit_type_id')->default(0)->unsigned();
            $table->integer('store_id')->unsigned();
            $table->decimal('cost', 10, 2)->nullable();
            $table->decimal('retail', 10, 2)->nullable();
            $table->decimal('reorder_limit')->nullable();
            $table->string('code')->nullable();
            $table->integer('status')->default(1);
            $table->string('rack')->nullable();
            $table->string('sub_rack')->nullable();
            $table->string('bin')->nullable();
            $table->string('sub_bin')->nullable();
            $table->integer('barcode_id')->nullable()->unsigned();
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
        Schema::dropIfExists('products');
    }
}
