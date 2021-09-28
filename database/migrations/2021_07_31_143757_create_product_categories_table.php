<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ProductCategory;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        ProductCategory::create(['name'=>'Tyre']);
        ProductCategory::create(['name'=>'Polish']);
        ProductCategory::create(['name'=>'Car Shampoo']);
        ProductCategory::create(['name'=>'Bumper']);
        ProductCategory::create(['name'=>'Side Mirror']);
        ProductCategory::create(['name'=>'Disc']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
