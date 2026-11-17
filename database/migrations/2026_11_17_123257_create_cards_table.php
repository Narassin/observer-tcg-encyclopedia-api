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
            $table->string('id')->primary();
            $table->string('name_jp');
            $table->string('name_en');
            $table->string('card_class');
            $table->string('card_type_jp')->nullable();
            $table->string('card_type_en')->nullable();
            $table->string('rarity');
            $table->string('artist')->unsigned();
            $table->string('illustrator')->unsigned();
            $table->text('ability_jp');
            $table->text('ability_en');
            $table->text('center_effect_jp')->nullable();
            $table->text('center_effect_en')->nullable();
            $table->text('effect_jp')->nullable();
            $table->text('effect_en')->nullable();
            $table->string('product')->nullable();
            $table->string('image_url')->nullable();
            $table->string('link_tag')->nullable();
            $table->boolean('limited');
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
