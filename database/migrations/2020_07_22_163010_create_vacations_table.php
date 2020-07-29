<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('datetime');
            $table->unsignedInteger('worker_id');
            $table->unsignedSmallInteger('type_id');
            $table->date('start');
            $table->date('end');
            
            $table->foreign('worker_id')->references('id')->on('workers');
            $table->foreign('type_id')->references('id')->on('vacation_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacations');
    }
}
