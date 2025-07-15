<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->unsignedInteger('RoleID');
            $table->unsignedInteger('PermissionID');

            // Foreign keys
            $table->foreign('RoleID')->references('RoleID')->on('roles')->onDelete('cascade');
            $table->foreign('PermissionID')->references('PermissionID')->on('permissions')->onDelete('cascade');

            // Composite primary key
            $table->primary(['RoleID', 'PermissionID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permissions');
    }
}
