<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCooperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            //$table->string('student',1);
            $table->string('address',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('zipcode',6)->nullable();
            $table->string('email',50);
            $table->string('telephone',15);
            $table->string('university',100);
            $table->string('department',100);
            //$table->string('facebook',100)->nullable();
            //$table->string('google',100)->nullable();
            //$table->string('twitter',100)->nullable();
            //$table->string('linkedin',100)->nullable();
            $table->date('birth_date',10)->nullable();
            //$table->string('gender',6);
            $table->string('deleted',1)->default("0");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cooperators');
    }
}
