<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('describe');
            $table->string('article_url');
            $table->string('article_content');
            $table->string('image_url');
            $table->integer('owner_id')->unsigned()->index();
            $table->foreign('owner_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('schedule_cards');
    }
}
