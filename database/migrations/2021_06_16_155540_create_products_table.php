<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->integer('quantity_available')->default(1);
            $table->string('brand');
            $table->string('condition');
            $table->integer('category_id');
            $table->string('images');

            $table->string('seller_name');
            $table->string('seller_phone');
            $table->string('seller_address')->nullable();
            $table->string('for_favourite')->default('product');

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
        Schema::dropIfExists('products');
    }
}
