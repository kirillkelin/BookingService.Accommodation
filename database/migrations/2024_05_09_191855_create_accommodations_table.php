<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('price');
            $table->boolean('status');
            $table->foreignId('characteristics_id');
            $table->integer('tenant_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accommodations');
    }
};
