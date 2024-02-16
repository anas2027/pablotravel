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
        Schema::create('restaurent_table', function (Blueprint $table) {
            $table->id();
            $table->integer('person_count');
            $table->integer('num');
            $table->unsignedBigInteger('restaurent_id');
            $table->foreign('restaurent_id')->references('id')->on('restaurent')->onDelete('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurent_tables');
    }
};
