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
        Schema::create('card_pages', function (Blueprint $table) {
            $table->id();
            /*
                I am not sure what the best way to do this, I think the common things between every card page will be a column then the body will be a reference to a .txt file with styling or whatever ... 
                $table->text('overview')
                $table->string('body_link') //link to the content/body of the card_page
                $table->jsonb('external_resources') //list of external resources or maybe external resources will be its own table ... 
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_pages');
    }
};
