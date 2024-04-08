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
        Schema::create('users_knowledges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('knowledges_id');
            $table->foreign('knowledges_id')->references('id')->on('knowledges');
            $table->unsignedBigInteger('levels_id');
            $table->foreign('levels_id')->references('id')->on('levels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_knowledges');
    }
};
