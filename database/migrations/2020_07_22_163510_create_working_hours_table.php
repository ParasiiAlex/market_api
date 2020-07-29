<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_hours', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('datetime');
            $table->unsignedInteger('worker_id');
            $table->unsignedSmallInteger('status_id');
            $table->date('date');
            $table->time('from');
            $table->time('to');
    
            $table->foreign('worker_id')->references('id')->on('workers');
            $table->foreign('status_id')->references('id')->on('working_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_hours');
    }
}
