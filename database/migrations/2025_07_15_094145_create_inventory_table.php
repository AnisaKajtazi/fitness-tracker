<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('InventoryID'); // PK

            // Foreign Keys
            $table->unsignedInteger('UserID');
            $table->unsignedInteger('MealID');

            // Data columns
            $table->integer('quantity');

            $table->timestamps(); // includes created_at dhe updated_at

            // Një kolonë për "change" (sipas diagramit), tip teksti
            $table->string('change')->nullable();

            // Foreign key constraints
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('MealID')->references('MealID')->on('meals')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
