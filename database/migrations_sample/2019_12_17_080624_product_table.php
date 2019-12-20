<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('code')->unsigned();
            $table->double('price_buy', 100, 2);
            $table->double('price_sell', 100, 2);
            $table->integer('stock', 100);
            $table->integer('category_id', 100);
            $table->string('description', 255);
            $table->string('image', 255)->nullable();
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
        //
        Schema::dropIfExists('product');

    }
}
