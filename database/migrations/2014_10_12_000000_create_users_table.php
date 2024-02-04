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
            $table->id();
            $table->string('group-name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
            
            $table->boolean('is_binusian')->default(false);
            $table->string('leader-full-name')->nullable();
            $table->string('whatsapp-number')->nullable();
            $table->string('line-id')->nullable();
            $table->string('github')->nullable();
            $table->string('birth-place')->nullable();
            $table->date('dob')->nullable();

            $table->string('cv')->nullable();
            $table->string('flazz')->nullable();
            $table->string('id-card')->nullable();
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
