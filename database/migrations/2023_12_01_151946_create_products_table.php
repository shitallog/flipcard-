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
			$table->string('name')->nullable();
			$table->foreignId('category_id')->constrained()->onDeleate('cascate');
			$table->text('description');
			$table->string('slug')->default('')->nullable();
            $table->string('image')->nullable();
            $table->decimal('selling_price', 10, 2);
            $table->decimal('offer_price', 10, 2)->nullable();
            $table->integer('quantity')->default(0);
		    $table->decimal('price', 8, 2);
			$table->decimal('mrp', 8, 2);
            $table->integer('status');
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
