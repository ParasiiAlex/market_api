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
            $table->increments('id');
            $table->unsignedSmallInteger('category_id');
            $table->unsignedSmallInteger('unit_id');
            $table->unsignedSmallInteger('supplier_id');
            $table->string('name');
            $table->string('description', 1023);
            
            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->foreign('unit_id')->references('id')->on('measure_units');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
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
