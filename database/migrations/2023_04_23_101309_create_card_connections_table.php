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
        Schema::create('card_connections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('card_A_id')
                ->constrained('cards')
                ->onDelete('cascade');
            $table->foreignId('card_B_id')
                ->constrained('cards')
                ->onDelete('cascade');
            //$table->boolean('is_directed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_connections');
    }
};
