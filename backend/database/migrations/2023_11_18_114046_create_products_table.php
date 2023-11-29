<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name', 105);
                $table->longText('description');
                $table->integer('price')->default(0);
                $table->string('availability')->default(0);
                $table->longText('key_feature');
                $table->foreignId('color_id')->constrained('colors');
                $table->string('product_unique_id', 25);
                $table->string('manufacturer', 50);
                $table->foreignId('sub_category_id')->constrained('sub_categories');
                $table->timestamps();
            });
        }
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
};
