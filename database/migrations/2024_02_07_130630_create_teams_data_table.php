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
        Schema::create('teams_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained(); // This creates a foreign key relationship
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('color_label')->nullable();
            $table->string('color_border')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams_data');
    }
};
