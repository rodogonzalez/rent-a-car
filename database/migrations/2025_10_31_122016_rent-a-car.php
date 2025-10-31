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

        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('code')->index();
            $table->string('icon');
        });

        Schema::create('fuel_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('icon')->nullable();
        });

        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->id();
            $table->string('code')->index();
            $table->string('name')->index();
            $table->string('icon')->nullable();
        });

        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('code')->index();
            $table->string('phone')->nullable();
            $table->float('position_lng', 10, 6)->nullable();
            $table->float('position_lat',  10, 6)->nullable();
            $table->string('picture')->nullable();
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('code')->index();
            $table->string('picture')->nullable();
            $table->foreignId('fuel_types_id')->nullable()->index();
            $table->foreignId('vehicle_types_id')->nullable()->index();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('offices');
        Schema::dropIfExists('vehicle_types');
        Schema::dropIfExists('fuel_types');
        Schema::dropIfExists('countries');
    }
};
