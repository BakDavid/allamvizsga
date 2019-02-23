<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('key_words', 100);
            $table->string('abstract');
            $table->string('thesis_name_upload', 100);
            $table->string('comment');
            $table->string('deleted', 1)->default("0");
            $table->integer('category_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('submissions');
    }

}
