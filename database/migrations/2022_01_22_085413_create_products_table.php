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
            $table->string('product_name');
            $table->text('product_description');
            $table->string('volume');
            $table->string('varietal')->nullable();
            $table->string('appellation')->nullable();
            $table->string('vintage')->nullable();
            $table->string('profile')->nullable();
            $table->float('alcohol');
            $table->double('price');
            $table->string('product_image');
            $table->string('slug');
            $table->boolean('featured')
                ->nullable()
                ->default('0');
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
