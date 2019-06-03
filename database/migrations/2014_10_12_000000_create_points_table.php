<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->string('form_1',3);
            $table->string('form_2',3);
            $table->string('form_3',3);
            $table->text('form_comment')->nullable();
            $table->string('literature_1',3);
            $table->string('literature_2',3);
            $table->string('literature_3',3);
            $table->text('literature_comment')->nullable();
            $table->string('info_collect_1',3);
            $table->string('info_collect_2',3);
            $table->string('info_collect_3',3);
            $table->string('info_collect_4',3);
            $table->text('info_collect_comment')->nullable();
            $table->string('conclusion_1',3);
            $table->string('conclusion_2',3);
            $table->string('conclusion_3',3);
            $table->string('conclusion_4',3);
            $table->text('conclusion_comment')->nullable();
            $table->string('opinion_1',3);
            $table->string('opinion_2',3);
            $table->string('opinion_3',3);
            $table->string('opinion_4',3);
            $table->text('opinion_comment')->nullable();
            $table->string('abstract_1',3);
            $table->string('abstract_2',3);
            $table->string('abstract_3',3);
            $table->text('abstract_comment')->nullable();
            $table->string('full_point',7);
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
        Schema::dropIfExists('points');
    }
}
