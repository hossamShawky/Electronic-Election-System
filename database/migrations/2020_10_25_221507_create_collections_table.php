<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('symbol');
            $table->string('symbol_name');
            $table->string('serial_number');
            $table->string('image');
            $table->string('program');
            $table->foreignId('election_id');
            $table->foreignId('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('election_id')->references('id')->on('elections');
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
        Schema::dropIfExists('collections');
    }
}
