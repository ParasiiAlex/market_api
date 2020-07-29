<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('datetime');
            $table->unsignedSmallInteger('status_id');
            $table->text('document_name');
    
            $table->foreign('status_id')->references('id')->on('employment_application_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment_applications');
    }
}
