<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accommodation_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('login');
            $table->string('email');
            $table->string('phone');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('landlords');
    }
};
