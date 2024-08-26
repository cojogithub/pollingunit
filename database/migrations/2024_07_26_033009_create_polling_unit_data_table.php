<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollingUnitDataTable extends Migration
{
    public function up()
    {
        Schema::create('polling_unit_data', function (Blueprint $table) {
            $table->id();
            $table->integer('registered_voters')->nullable(); // Allow null values
            $table->integer('accredited_voters')->nullable(); // Allow null values
            $table->integer('void_votes')->nullable(); // Allow null values
            $table->integer('election_result')->nullable(); // Allow null values
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('polling_unit_data');
    }
}
