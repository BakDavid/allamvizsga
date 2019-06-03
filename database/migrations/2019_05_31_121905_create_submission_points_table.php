<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission__points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('submission_id')->unsigned();
            $table->integer('point_id')->unsigned();
            $table->timestamps();
            $table->rememberToken();

            $table->foreign('submission_id')->references('id')->on('submissions');
            $table->foreign('point_id')->references('id')->on('points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submission__points');
    }
}
