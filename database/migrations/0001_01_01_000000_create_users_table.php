<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->text('bio')->nullable();
            $table->date('dob')->nullable();
            $table->string('website')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('company')->nullable();
            $table->string('jobposition')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('voter_id')->nullable();
            $table->string('nin_bvn')->nullable();
            $table->string('state_name')->nullable(); // New column for state_name
            $table->foreignId('state_id')->constrained()->onDelete('cascade');
            $table->foreignId('senatorial_district_id')->constrained()->onDelete('cascade');
            $table->foreignId('federal_constituency_id')->constrained()->onDelete('cascade');
            $table->foreignId('lga_id')->constrained()->onDelete('cascade');
            $table->foreignId('ward_id')->constrained()->onDelete('cascade');
            $table->foreignId('polling_unit_id')->constrained()->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
