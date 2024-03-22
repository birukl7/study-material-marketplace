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
        Schema::table('resources', function (Blueprint $table) {
            //
            $table->string('preview_file')->after('resource_file')->default('public/file_store/previews/error.jpg');
            $table->string('resource_file')->default('public/file_store/resources/error.jpg')->change(); 
            $table->string('image')->default('public/file_store/images/error.jpg')->change(); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resources', function (Blueprint $table) {
            //
        });
    }
};
