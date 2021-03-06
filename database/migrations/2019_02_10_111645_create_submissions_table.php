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
            $table->text('title')->nullable();
            $table->string('key_words', 100)->nullable();
            $table->text('abstract')->nullable();
            $table->string('thesis_name_upload', 100)->nullable();
            $table->string('comment')->nullable();
            $table->string('deleted', 1)->default("0");
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('advisor_name')->nullable();
            $table->string('advisor_email')->nullable();
            $table->timestamp('advisor_verified_at')->nullable();
            $table->text('id_hash')->nullable();
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
