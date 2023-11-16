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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image_cover_url')->nullable();
            $table->string('video_trailer_url')->nullable();
            $table->unsignedInteger('duration')->nullable();
            $table->decimal('original_price', 12, 0);
            $table->decimal('discounted_price', 12, 0)->nullable();
            $table->unsignedInteger('total_review');
            $table->unsignedInteger('total_learners');
            $table->foreignId('institution_id')->constrained('institutions');
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
