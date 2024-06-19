<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddLgaIdToPollingUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('polling_units', function (Blueprint $table) {
            if (!Schema::hasColumn('polling_units', 'lga_id')) {
                $table->unsignedBigInteger('lga_id')->after('ward_id');
                $table->foreign('lga_id')->references('id')->on('lgas')->onDelete('cascade');
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
        if (DB::getDriverName() === 'sqlite') {
            // Drop the old table if it exists
            if (Schema::hasTable('polling_units_old')) {
                Schema::drop('polling_units_old');
            }

            // Rename the original table
            Schema::rename('polling_units', 'polling_units_old');

            // Create new table without the foreign key
            Schema::create('polling_units', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('ward_id');
                $table->string('name');
                $table->timestamps();
                // Add other columns except 'lga_id'
                // Add other columns here if any, for example:
                // $table->string('polling_unit_number')->nullable();
                // $table->string('polling_unit_description')->nullable();
            });

            // Copy data from the old table to the new table
            $columns = Schema::getColumnListing('polling_units_old');
            $columns = array_diff($columns, ['lga_id']);
            DB::table('polling_units')->insert(
                DB::table('polling_units_old')->select($columns)->get()->map(function ($item) {
                    return (array) $item;
                })->toArray()
            );

            // Drop the old table
            Schema::drop('polling_units_old');
        } else {
            Schema::table('polling_units', function (Blueprint $table) {
                if (Schema::hasColumn('polling_units', 'lga_id')) {
                    $table->dropForeign(['lga_id']);
                    $table->dropColumn('lga_id');
                }
            });
        }
    }
}
