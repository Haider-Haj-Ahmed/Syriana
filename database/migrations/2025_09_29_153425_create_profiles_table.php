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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['guide', 'tourist']);
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->json('languages')->nullable();
            $table->json('certifications')->nullable();
            $table->text('about')->nullable();
            $table->float('rating_avg')->default(0);
            $table->unsignedBigInteger('followers_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
