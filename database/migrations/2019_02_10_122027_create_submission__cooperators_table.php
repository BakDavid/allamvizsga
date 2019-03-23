<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionCooperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission__cooperators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('submission_id')->unsigned();
            $table->integer('cooperator_id')->unsigned();
            $table->string('deleted')->default('0');
            $table->timestamps();
            $table->rememberToken();

            $table->foreign('submission_id')->references('id')->on('submissions');
            $table->foreign('cooperator_id')->references('id')->on('cooperators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submission__cooperators');
    }
}
