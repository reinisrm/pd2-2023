<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('genre_id')->nullable();
        });

        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->foreign('genre_id')->references('id')->on('genres');
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genres');

        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('genre_id');
            $table->dropColumn('genre_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('genre_id');
        });
    }
};
