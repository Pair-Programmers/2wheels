<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('company_id');
            $table->integer('model_year');
            $table->integer('model_id');
            $table->string('images');
            $table->longText('description')->nullable();
            $table->string('engine_type');
            $table->string('reg_city_id');
            $table->string('additional_info');
            $table->string('category');
            $table->integer('price');
            $table->integer('mileage');
            $table->integer('rating')->default(5);
            $table->integer('no_of_reviews')->default(0);
            $table->string('body_type')->nullable();

            $table->string('seller_name');
            $table->string('seller_phone');
            $table->string('seller_comment')->nullable();
            $table->string('seller_address');
            $table->string('for_favourite')->default('bike');

            $table->integer('user_id');

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
        Schema::dropIfExists('bikes');
    }
}
