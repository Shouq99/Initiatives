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
        Schema::create('hostingforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number');
            $table->string('email')->unique();
            $table->string('status')->default('0');
            $table->string('budget');
            $table->string('space');
            $table->string('bandwidth');
            $table->string('requests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostingforms');
    }
};
