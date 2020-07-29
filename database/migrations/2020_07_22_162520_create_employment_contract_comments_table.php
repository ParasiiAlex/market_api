<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentContractCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_contract_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('datetime');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('contract_id');
            $table->string('text');
    
            $table->foreign('owner_id')->references('id')->on('workers');
            $table->foreign('contract_id')->references('id')->on('employment_contracts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment_contract_comments');
    }
}
