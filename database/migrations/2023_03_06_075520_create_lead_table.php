<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->integer('system_installer_1')->default(0);
            $table->integer('system_installer_2')->default(0);
            $table->integer('monthly_electric_usage')->default(0);
            $table->integer('solar_system_type')->default(0);
            $table->integer('solar_panels_place')->default(0);
            $table->integer('materials_roof')->default(0);
            $table->boolean('contact_type')->default(0);
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
        Schema::dropIfExists('leads');
    }
}
