<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 100);
            $table->year('departure');
            $table->year('return');
            $table->string('airlineCompany', 100);
            $table->boolean('lunchPackage')->nullable()->default(false);
            $table->boolean('accommodation')->nullable()->default(false);
            $table->boolean('receptionOfficer')->nullable()->default(false);
            $table->boolean('transferService')->nullable()->default(false);
            $table->longText('descriptionTravel')->nullable();
            $table->decimal('price', 10, 2);
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
        Schema::dropIfExists('travel_packages');
    }
}
