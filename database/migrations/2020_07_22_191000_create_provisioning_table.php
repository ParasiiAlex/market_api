<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvisioningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provisioning', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('datetime');
            $table->unsignedInteger('manager_id');
            $table->unsignedInteger('product_id');
            $table->unsignedSmallInteger('market_id');
            $table->integer('quantity');
    
            $table->foreign('manager_id')->references('id')->on('workers');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('market_id')->references('id')->on('markets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provisioning');
    }
}
