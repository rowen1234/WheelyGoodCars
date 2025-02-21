<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PharIo\Manifest\License;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('license_plate');
            $table->string('make');
            $table->string('model');
            $table->decimal('price');
            $table->integer('mileage');
            $table->integer('seats');
            $table->integer('doors');
            $table->integer('production_year');
            $table->integer('weight');
            $table->string('color');
            $table->text('image');
            $table->timestamp('sold_at');
            $table->integer('views');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
