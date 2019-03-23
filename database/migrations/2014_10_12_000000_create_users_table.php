<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('address',100);
            $table->string('city',100);
            $table->string('country',100);
            $table->string('zipcode',6);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telephone',15);
            $table->string('university',100);
            $table->string('department',100);
            $table->string('facebook',100)->nullable();
            $table->string('google',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->string('linkedin',100)->nullable();
            $table->string('photo')->nullable();
            $table->string('user_type',10);
            $table->date('birth_date',10);
            $table->string('gender',6);
            $table->string('deleted',1)->default("0");
            $table->string('activated',1)->default("0");
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
