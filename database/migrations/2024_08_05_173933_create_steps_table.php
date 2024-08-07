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
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('travel_id')->nullable();
            $table->string('start_place', 100);
            $table->string('end_place', 100)->nullable();
            $table->string('slug', 150)->nullable();
            $table->text('description')->nullable();
            $table->string('geographic_coordinates', 100)->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
            $table->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steps');
    }
};
