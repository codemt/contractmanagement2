<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('id');
            $table->string('product_name');
            $table->text('product_description');
            $table->integer('product_qty');
            $table->integer('product_unit');
            $table->integer('product_rate');
            $table->string('product_tax_rate');
            $table->integer('product_cgst');
            $table->integer('product_sgst');
            $table->integer('sub_total');
            $table->integer('discount');
            $table->string('product_amount');
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
