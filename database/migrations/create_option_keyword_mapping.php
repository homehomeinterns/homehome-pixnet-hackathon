<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionKeywordMapping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_keyword_mapping', function (Blueprint $table) {
            $table->integer('option_id')->unsigned()->index();
            $table->integer('keyword_id')->unsigned()->index();
            $table->foreign('option_id')
                  ->references('option_id')->on('option')
                  ->onDelete('cascade');
            $table->foreign('keyword_id')
                  ->references('keyword_id')->on('keyword')
                  ->onDelete('cascade');
            $table->primary(['option_id', 'keyword_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_keyword_mapping');
    }
}
