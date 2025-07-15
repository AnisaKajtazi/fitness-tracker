<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('PurchasesID');

            // Foreign key to users table
            $table->unsignedInteger('UserID');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');

            // Foreign key to meals table
            $table->unsignedInteger('MealID');
            $table->foreign('MealID')->references('MealID')->on('meals')->onDelete('cascade');

            // Other fields
            $table->integer('quantity');
            $table->decimal('total_price', 8, 2);
            $table->dateTime('datetime');
            $table->string('payment_method');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
}
