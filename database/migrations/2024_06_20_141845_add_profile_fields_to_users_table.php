<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable();
            }
            if (!Schema::hasColumn('users', 'bio')) {
                $table->text('bio')->nullable();
            }
            if (!Schema::hasColumn('users', 'birthday')) {
                $table->date('birthday')->nullable();
            }
            if (!Schema::hasColumn('users', 'country')) {
                $table->string('country')->nullable();
            }
            if (!Schema::hasColumn('users', 'website')) {
                $table->string('website')->nullable();
            }
            if (!Schema::hasColumn('users', 'twitter')) {
                $table->string('twitter')->nullable();
            }
            if (!Schema::hasColumn('users', 'facebook')) {
                $table->string('facebook')->nullable();
            }
            if (!Schema::hasColumn('users', 'google_plus')) {
                $table->string('google_plus')->nullable();
            }
            if (!Schema::hasColumn('users', 'linkedin')) {
                $table->string('linkedin')->nullable();
            }
            if (!Schema::hasColumn('users', 'instagram')) {
                $table->string('instagram')->nullable();
            }
            if (!Schema::hasColumn('users', 'company')) {
                $table->string('company')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'phone')) {
                $table->dropColumn('phone');
            }
            if (Schema::hasColumn('users', 'bio')) {
                $table->dropColumn('bio');
            }
            if (Schema::hasColumn('users', 'birthday')) {
                $table->dropColumn('birthday');
            }
            if (Schema::hasColumn('users', 'country')) {
                $table->dropColumn('country');
            }
            if (Schema::hasColumn('users', 'website')) {
                $table->dropColumn('website');
            }
            if (Schema::hasColumn('users', 'twitter')) {
                $table->dropColumn('twitter');
            }
            if (Schema::hasColumn('users', 'facebook')) {
                $table->dropColumn('facebook');
            }
            if (Schema::hasColumn('users', 'google_plus')) {
                $table->dropColumn('google_plus');
            }
            if (Schema::hasColumn('users', 'linkedin')) {
                $table->dropColumn('linkedin');
            }
            if (Schema::hasColumn('users', 'instagram')) {
                $table->dropColumn('instagram');
            }
            if (Schema::hasColumn('users', 'company')) {
                $table->dropColumn('company');
            }
        });
    }
}
