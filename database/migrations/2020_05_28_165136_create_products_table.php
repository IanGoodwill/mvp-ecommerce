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
            $table->string('description');
            $table->string('brand');
            $table->string('image');
            $table->decimal('price');
            $table->unsignedInteger('small_units')->default(15);
            $table->unsignedInteger('medium_units')->default(9);
            $table->unsignedInteger('large_units')->default(25);
            $table->boolean('is_sale')->default( false );
            $table->boolean('is_favorite')->default( false );
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
