<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('ExerciseID'); // Primary Key
            $table->string('name', 255); // Emri i ushtrimit
            $table->text('description')->nullable(); // Përshkrimi, opsional
            $table->integer('duration')->nullable(); // Kohëzgjatja në minuta (mund ta ndryshojmë)
            $table->string('image', 255)->nullable(); // Emri ose path i imazhit
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
