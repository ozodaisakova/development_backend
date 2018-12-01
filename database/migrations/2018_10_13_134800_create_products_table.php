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
            $table->string('name');
            $table->integer('catalog_id')->nullable();
            $table->integer('price')->nullable();
            $table->text('colors')->nullable();        
            $table->text('description')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('length')->nullable();
            $table->text('material')->nullable();
            $table->text('complect')->nullable();
            $table->text('karkas')->nullable();
            $table->text('images')->nullable();
            $table->text('compound')->nullable();
            $table->text('recommendation')->nullable();
            $table->tinyInteger('hidden')->default(0);
            $table->tinyInteger('available')->default(1);
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
