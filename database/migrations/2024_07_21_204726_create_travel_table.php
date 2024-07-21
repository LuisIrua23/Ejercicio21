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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('num_plazas');
            $table->date('fecha');
            $table->string('otros_datos');

            $table->unsignedBigInteger('traveler_id')->nullable();
            $table->foreign('traveler_id')
            ->references('id')
            ->on('travelers')
            ->onDelete('set null');

            $table->unsignedBigInteger('origin_id')->nullable();
            $table->foreign('origin_id')
            ->references('id')
            ->on('origins')
            ->onDelete('set null');

            $table->unsignedBigInteger('destination_id')->nullable();
            $table->foreign('destination_id')
            ->references('id')
            ->on('destinations')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
