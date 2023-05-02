<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('role',['Employee','Advisor']);
            $table->string('national_id')->unique();
            $table->string('password');
            $table->foreignId('election_id');
            $table->foreign('election_id')->references('id')->on('elections');
            $table->foreignId('committee_id');
            $table->foreign('committee_id')->references('id')->on('committees');
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
        Schema::dropIfExists('employees');
    }
}
