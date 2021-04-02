
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
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id')->default(0);
            $table->string('model')->nullable();
            $table->decimal('buying_price');
            $table->decimal('selling_price');
            $table->decimal('special_price')->nullable();
            $table->date('special_price_from')->nullable();
            $table->date('special_price_to')->nullable();
            $table->integer('quantity');
            $table->string('sku_code');
            $table->string('color')->default('[]');
            $table->string('size')->default('[]');
            $table->text('title')->default('Test title');
            $table->string('thumbnail');
            $table->string('image')->default('[]');
            $table->tinyInteger('warranty')->default(0)->comment('1 yes and 0 no');
            $table->string('warranty_duration')->nullable();
            $table->longText('warranty_conditions')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('featured')->default(0);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('create_by');
            $table->unsignedBigInteger('update_by')->nullable();

            $table->foreign('create_by')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('update_by')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('brand_id')->on('brands')->references('id')->onDelete('cascade');
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
