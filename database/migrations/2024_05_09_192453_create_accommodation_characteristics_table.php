<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accommodation_characteristics', function (Blueprint $table) {
            $table->id();
            $table->integer('count_rooms');
            $table->integer('total_area');
            $table->string('address');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accommodation_characteristics');
    }

};
