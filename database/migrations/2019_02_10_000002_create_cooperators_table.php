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
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('student',1);
            $table->string('address',30);
            $table->string('city',30);
            $table->string('country',30);
            $table->string('zipcode',6);
            $table->string('email',30);
            $table->string('telephone',15);
            $table->string('university',30);
            $table->string('department',30);
            $table->string('facebook',50)->nullable();
            $table->string('google',50)->nullable();
            $table->string('twitter',50)->nullable();
            $table->string('linkedin',50)->nullable();
            $table->date('birth_date',10);
            $table->string('gender',6);
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
