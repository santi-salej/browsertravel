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
        Schema::create('table__browsertravel', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('main_weather');
            $table->string('description_weather');
            $table->string('humidity');
            $table->string('temp');
            $table->string('country');
            $table->string('logitud');
            $table->string('latitud');
            $table->string('cod');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__browsertravel');
    }
};
