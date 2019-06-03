<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->date('application_start',10);
            $table->date('application_deadline',10);
            $table->date('abstract_upload_deadline',10);
            $table->date('thesis_upload_deadline',10);
            $table->date('conference_day',10);
            $table->string('room',50)->nullable();
            $table->string('university',50);
            $table->string('address',100);
            $table->string('city',100);
            $table->string('country',100);
            $table->string('zipcode',6)->nullable();
            $table->string('comment',3000)->nullable();
            $table->integer('conference_sponsor_id')->unsigned()->nullable();
            $table->string('participants')->default("0");
            $table->integer('max_participants')->nullable();
            $table->string('deleted', 1)->default("0");
            $table->string('public', 1)->default("1");
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
