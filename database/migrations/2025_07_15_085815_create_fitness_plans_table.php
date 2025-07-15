<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('fitness_plans', function (Blueprint $table) {
        $table->increments('Fitness_PlanID'); // Primary Key
        $table->string('name', 255); // Emri i planit
        $table->string('goal', 255)->nullable(); // Qëllimi i planit
        $table->integer('duration_days')->nullable(); // Kohëzgjatja në ditë
        $table->unsignedInteger('created_by')->nullable();
        $table->foreign('created_by')->references('UserID')->on('users')->onDelete('set null');
        $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('fitness_plans');
    }
};
