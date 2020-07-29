<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionCostRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_cost_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cost_id');
            $table->unsignedInteger('promotion_id');
    
            $table->foreign('cost_id')->references('id')->on('product_costs');
            $table->foreign('promotion_id')->references('id')->on('promotions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotion_cost_relations');
    }
}
