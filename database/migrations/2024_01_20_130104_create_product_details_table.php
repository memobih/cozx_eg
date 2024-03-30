<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('quantity');
            $table->string('product_code');
            $table->foreign('product_code')->references('code' )->on('products')->cascadeOnDelete()->cascadeOnUpdate();            $table->foreignid('size_id')->constrained('sizes', 'id');
            $table->foreignid('color_id')->constrained('colors', 'id');
            $table->timestamps();
        });
    }

    /**a
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_details');
    }
};
