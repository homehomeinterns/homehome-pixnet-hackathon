<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordSpotMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_spot_mappings', function (Blueprint $table) {
            $table->integer('keyword_id')->unsigned()->index();
            $table->integer('spot_id')->unsigned()->index();
            $table->foreign('keyword_id')
                  ->references('id')->on('keywords')
                  ->onDelete('cascade');
            $table->foreign('spot_id')
                  ->references('id')->on('spots')
                  ->onDelete('cascade');
            $table->primary(['keyword_id', 'spot_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyword_spot_mappings');
    }
}
