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
            $table->integer('registered_voters');
            $table->integer('accredited_voters');
            $table->integer('void_votes');
            $table->integer('election_result');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('polling_unit_data');
    }
}
