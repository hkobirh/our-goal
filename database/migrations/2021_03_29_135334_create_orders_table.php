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
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('shipping_id');
            $table->decimal('total',10,2);
            $table->integer('shipping_cost')->default('60');
            $table->enum('status',['pending','success','shipped','returned'])->default('pending');
            $table->timestamps();

            $table->foreign('customer_id')->on('customers')->references('id')->onDelete('cascade');
            $table->foreign('shipping_id')->on('shippings')->references('id')->onDelete('cascade');
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
