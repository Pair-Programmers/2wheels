<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemainingAttributesInModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bike_models', function (Blueprint $table) {
            $table->string('dimension')->nullable();
            $table->string('starting')->nullable();
            $table->string('top_speed')->nullable();
            $table->string('petrol_capacity')->nullable();
            $table->string('fuel_average')->nullable();
            $table->string('dry_weight')->nullable();
            $table->string('frame')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('wheel_size')->nullable();
            $table->string('tyre_at_back')->nullable();
            $table->string('tyre_at_front')->nullable();
            $table->string('horsepower')->nullable();
            $table->string('torque')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('models', function (Blueprint $table) {
            //
        });
    }
}
