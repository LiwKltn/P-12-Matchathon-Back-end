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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname')->unique();
            $table->string('email')->unique();
            $table->unsignedBigInteger('bootcamp_id');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->foreign('bootcamp_id')->references('id')->on('bootcamps');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('role_id')->references('id')->on('roles');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};