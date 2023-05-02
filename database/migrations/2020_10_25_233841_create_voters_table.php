<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->binary('fingerprint');
            $table->enum('status',['0','1']);
            $table->string('national_id')->unique();
            $table->string('notes')->nullable();
            $table->foreignId('employee_id');
            $table->foreignId('election_id');
            $table->foreignId('committee_id');
            $table->foreignId('region_id');
            $table->foreign('committee_id')->references('id')->on('committees');
            $table->foreign('employee_id')->references('id')->on('employees');
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
        Schema::dropIfExists('voters');
    }
}
