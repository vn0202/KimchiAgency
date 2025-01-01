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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0)->index();
            $table->unsignedInteger('category_id')->nullable()->index();
            $table->string('title');
            $table->text('description');
            $table->string('slug')->index()->nullable();
            $table->unsignedBigInteger('featured_media_id')->nullable();
            $table->string('status', 50)->default('draft')->index();
            $table->longText('content');
            $table->boolean('featured')->default(0);
            $table->string('type', 20);
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();
            $table->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
