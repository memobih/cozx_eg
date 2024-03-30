<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
      $table->string('product_code');
      $table->foreign('product_code')->references('code' )->on('products')->cascadeOnDelete()->cascadeOnUpdate();
       $table->foreignId('color_id' )->constrained('colors' , 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
            $table->longText('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_images');
    }
};
