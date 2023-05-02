<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_vote', function (Blueprint $table) {
            $table->bigInteger('vote_id')->unsigned();
            $table->bigInteger('collection_id')->unsigned();
            $table->foreign('vote_id')->references('id')->on('votes');
            $table->foreign('collection_id')->references('id')->on('collections');
            $table->timestamps();
            $table->primary(['vote_id','collection_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_collection_vote');
    }
}
