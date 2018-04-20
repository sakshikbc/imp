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
        Schema::create( 'products', function ( Blueprint $table ) {
            $table->increments( 'id' );
            $table->string( 'product_name' );
            $table->double( 'original_price' );
            $table->double( 'discount_price' )->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->integer( 'in_stock' )->default( 1 );
            $table->string('url')->unique();
            $table->string( 'category' )->nullable();
            $table->string( 'status' );
            $table->timestamps();
            $table->softDeletes();
         });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'products' );
    }
}
