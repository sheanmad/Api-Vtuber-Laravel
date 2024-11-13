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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affiliation_id')
                ->constrained('affiliations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable;
            $table->string('avatar_url')->nullable;
            $table->dateTime('debut');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
