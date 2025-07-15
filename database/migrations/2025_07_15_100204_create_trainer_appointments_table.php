<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainer_appointments', function (Blueprint $table) {
            $table->increments('Trainer_AppointmentsID');
            $table->unsignedInteger('TrainerID'); // FK to users table
            $table->unsignedInteger('ClientID');  // FK to users table
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('canceled')->default(false);
            $table->string('cancel_reason')->nullable();
            $table->timestamps();

            // Foreign keys referencing the users table
            $table->foreign('TrainerID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('ClientID')->references('UserID')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainer_appointments');
    }
};
