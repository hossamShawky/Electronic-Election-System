<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sur_name');
            $table->string('serial_number');
            $table->string('party');
            $table->string('program');
            $table->string('image');
            $table->string('symbol_name');
            $table->string('symbol');
            $table->string('note');
            $table->enum('type',['list','individual']);
            $table->string('national_id')->unique();
            $table->foreignId('region_id');
            $table->foreignId('election_id');
            $table->foreignId('collection_id');
            $table->foreign('collection_id')->references('id')->on('collections');
            $table->foreign('election_id')->references('id')->on('elections');
            $table->foreign('region_id')->references('id')->on('regions');
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
        Schema::dropIfExists('candidates');
    }
}
