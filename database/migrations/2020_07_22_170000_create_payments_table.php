<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('worker_id');
            $table->unsignedInteger('mdl_value');
            $table->unsignedTinyInteger('bonus');
            $table->unsignedInteger('mdl_total_gross');
            $table->unsignedInteger('mdl_tax');
            $table->unsignedInteger('mdl_total_net');
    
            $table->foreign('worker_id')->references('id')->on('workers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
