<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('default_map_name');
            $table->string('description', 8192)->default('default_description');
            $table->string('icon')->default('');
            $table->string('color')->default('');
            $table->string('author')->default('default_author');
            $table->string('authorPic')->default(''); //this authors be their own table ... I could use them in summaries later on, if I create ones ...
            //I should add a boolean whether its done or not ... or a progress integer or float
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maps');
    }
};
