<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('RoleID');       
            $table->string('name', 255);        
            $table->text('description')->nullable(); 
            $table->timestamps();             
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
