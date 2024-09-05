<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFederalConstituenciesTable extends Migration
{
    public function up()
    {
        Schema::create('federal_constituencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('senatorial_district_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('federal_constituencies');
    }
}
