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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug')->unique();
            $table->unsignedInteger('views')->nullable()->default(0);
            $table->string('title');
            $table->boolean('active')->default(true);
            $table->text('description');
            $table->string('img')->nullable();
            $table->dateTime('date_active_from')->nullable();
            $table->dateTime('date_active_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
