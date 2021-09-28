<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('user_id');
            $table->string('model_id');
            $table->string('company_id');
            $table->string('model_year');
            $table->string('comment');
            $table->string('how_you_know');
            $table->integer('style');
            $table->integer('comfort');
            $table->integer('fuel_economy');
            $table->integer('performance');
            $table->integer('value_for_money');
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
        Schema::dropIfExists('bike_reviews');
    }
}
