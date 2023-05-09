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
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('heading');
            $table->mediumText('description');
            $table->mediumText('link');
            $table->string('link_name');
            $table->string('image');
            $table->tinyInteger('statuss')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');

    }
};
