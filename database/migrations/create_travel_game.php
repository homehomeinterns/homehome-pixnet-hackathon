<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelGame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_game', function (Blueprint $table) {
                $table->increments('id');
                $table->string('question_title');
                $table->integer('option_A')->unsigned()->index;
                $table->foreign('option_id')
                ->references('option_id')->on('option')
                ->onDelete('cascade');

                $table->integer('option_B')->unsigned()->index;
                $table->foreign('option_id')
                ->references('option_id')->on('option')
                ->onDelete('cascade');
                $table->integer('option_C')->unsigned()->index;
                $table->foreign('option_id')
                ->references('option_id')->on('option')
                ->onDelete('cascade');
                $table->integer('option_D')->unsigned()->index;
                $table->foreign('option_id')
                ->references('option_id')->on('option')
                ->onDelete('cascade');
                )};
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_game');
    }
}
