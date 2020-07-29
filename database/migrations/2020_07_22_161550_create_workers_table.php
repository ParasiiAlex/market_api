<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('role_id');
            $table->unsignedInteger('info_id');
            $table->unsignedSmallInteger('salary_id');
            $table->unsignedSmallInteger('bonus_id');
            $table->unsignedSmallInteger('market_id');
    
            $table->foreign('role_id')->references('id')->on('worker_roles');
            $table->foreign('info_id')->references('id')->on('personal_info');
            $table->foreign('salary_id')->references('id')->on('salaries');
            $table->foreign('bonus_id')->references('id')->on('bonuses');
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
        Schema::dropIfExists('workers');
    }
}
