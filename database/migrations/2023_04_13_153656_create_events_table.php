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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('attribute');
            $table->text('useragent');
            $table->string('visitor_ip');
            $table->string('country');
            $table->string('city');
            $table->text('referer')->nullable();
            $table->string('visitor_id');
            $table->string('device');
            $table->string('system')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
