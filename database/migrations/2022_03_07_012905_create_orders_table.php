<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('billing_first_name',25);
            $table->string('billing_last_name',25);
            $table->string('billing_company',50)->nullable();
            $table->string('billing_country');
            $table->string('billing_address_1',150);
            $table->string('billing_address_2',150)->nullable();
            $table->string('billing_city',100);
            $table->string('billing_state',100);
            $table->string('billing_postcode',100);
            $table->string('billing_phone');
            $table->string('billing_email',150);
            $table->text('order_comments')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
