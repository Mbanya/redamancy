<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_sheets', function (Blueprint $table) {
            $table->id();
            $table->text('tasting_notes')->nullable();
            $table->text('maturation')->nullable();
            $table->string('serving_temperature');
            $table->string('wine-origin');
            $table->string('soils');
            $table->string('planted');
            $table->string('variety');
            $table->string('clones');
            $table->string('altitude');
            $table->text('wine-making');
            $table->foreignId('product_id');
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
        Schema::dropIfExists('fact_sheets');
    }
}
