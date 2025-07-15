<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('PermissionID'); // Primary key
            $table->string('entity', 100);     // Emri i entitetit, p.sh. 'users', 'fitness_plans'
            $table->string('action', 50);      // Veprimi, p.sh. 'create', 'read', 'update', 'delete'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
