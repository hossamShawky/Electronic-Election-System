<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_votes', function (Blueprint $table) {
            $table->bigInteger('vote_id')->unsigned();
            $table->bigInteger('candidate_id')->unsigned();
            $table->foreign('vote_id')->references('id')->on('votes');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
            $table->primary(['vote_id','candidate_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_votes');
    }
}
