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
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tanggal');
            $table->decimal('co2', 8, 2);
            $table->decimal('no2', 8, 2);
            $table->decimal('co', 8, 2);
            $table->decimal('benzene', 8, 2);
            $table->decimal('toluene', 8, 2);
            $table->decimal('pm25', 8, 2);
            $table->decimal('humidity', 8, 2);
            $table->decimal('temperature', 8, 2);
            $table->float('aqi')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
