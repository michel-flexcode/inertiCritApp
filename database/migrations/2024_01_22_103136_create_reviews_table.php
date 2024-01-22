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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('item_id');
            $table->string('item_type');
            $table->text('comment');
            $table->integer('rating');
            $table->foreign('user_id')->references('id')->on('users');
            // Remplacez 'movies', 'series', 'albums', 'books' par le nom réel de chaque table d'éléments
            $table->foreign('item_id')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('series')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('books')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
