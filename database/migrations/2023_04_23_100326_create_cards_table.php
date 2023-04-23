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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon')->nullabe();
            $table->string('color')->nullable();
            $table->string('quote')->nullable();
            $table->text('description');

            $table->foreignId('type_id')
                ->nullable()
                ->constrained('card_types')
                ->onDelete('set null');

            $table->foreignId('map_id')
                ->nullable()
                ->onDelete('set null');

            $table->foreignId('parent_card_id')
                ->nullable()
                ->constrained('cards')
                ->onDelete('set null');
   
            $table->foreignId('page_id')
                ->nullable()
                ->constrained('card_pages')
                ->onDelete('set null');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
