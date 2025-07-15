<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffScheduleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staff_schedule', function (Blueprint $table) {
            $table->Increments('ScheduleID');
            $table->unsignedInteger('UserID');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedInteger('RoleID');
            $table->boolean('isAvailable')->default(true);
            $table->timestamps();

            // Foreign Keys
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('RoleID')->references('roleID')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_schedule');
    }
}
