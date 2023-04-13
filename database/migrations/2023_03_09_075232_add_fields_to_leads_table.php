<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->integer('plant_options')->after('materials_roof')->default(0);
            $table->integer('type_of_surface')->after('plant_options')->default(0);
            $table->integer('commercial_or_private')->after('type_of_surface')->default(0);
            $table->integer('area_size')->after('commercial_or_private')->default(0);
            $table->integer('promotions')->after('area_size')->default(0);
            $table->integer('owner_of_the_area')->after('promotions')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            //
        });
    }
}
