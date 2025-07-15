<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('MealID'); // Primary Key
            $table->string('name', 255); // Emri i ushqimit
            $table->text('description')->nullable(); // Përshkrimi, opsional
            $table->string('category', 100)->nullable(); // Kategoria (mëngjes, drekë, etj.)
            $table->string('image', 255)->nullable(); // Emri ose path i imazhit
            $table->integer('calories')->nullable(); // Kaloritë, opsionale
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
