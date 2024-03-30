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
        Schema::create('home_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_1')->constrained('categories' , 'id');
            $table->foreignId('category_2')->constrained('categories' , 'id');
            $table->foreignId('category_3')->constrained('categories' , 'id');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_categories');
    }
};
