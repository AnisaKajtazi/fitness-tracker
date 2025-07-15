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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('UserID');
            $table->string('username', 100)->unique();       
            $table->string('name', 255);   
            $table->string('surname', 255);  
            $table->string('email', 255);
            $table->string('password', 255);  
            $table->unsignedInteger('RoleID'); 
            $table->foreign('RoleID')->references('RoleID')->on('roles')->onDelete('cascade');
            $table->string('phone', 255);
            $table->string('address', 255);
            $table->date('dob');
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
