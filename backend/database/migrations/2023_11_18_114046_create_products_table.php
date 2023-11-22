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
                $table->integer('discounted_price')->nullable();
                $table->string('availability')->default(0);
                $table->longText('features');
                $table->string('color', 25)->nullable();
                $table->string('part_number', 25);
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
