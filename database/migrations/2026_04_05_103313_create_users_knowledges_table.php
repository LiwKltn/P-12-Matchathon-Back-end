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
            $table->bigIncrements('id');
            $table->string('knowledges_level');
            $table->unsignedBigInteger('knowledge_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('knowledge_id')->references('id')->on('knowledges');
            $table->foreign('user_id')->references('id')->on('users');

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
