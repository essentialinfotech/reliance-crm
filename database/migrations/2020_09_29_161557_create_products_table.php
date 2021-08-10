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
            $table->string('category_id');
            $table->string('brand_id');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_color');
            $table->decimal('buying_price',10,4);
            $table->decimal('selling_price',10,4);
            $table->decimal('special_price')->nullable();
            $table->date('special_start')->nullable();
            $table->date('special_end')->nullable();
            $table->text('description');
            $table->longText('long_description')->nullable();
            $table->string('image');
            $table->tinyInteger('feature_item')->default(0);
            $table->tinyInteger('status')->default(0);
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
