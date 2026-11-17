<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Home Page');
            $table->json('sliders')->nullable();
            $table->json('cta_blocks')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->text('about_paragraph_1')->nullable();
            $table->text('about_paragraph_2')->nullable();
            $table->string('about_image')->nullable();
            $table->string('about_button_url')->nullable();
            $table->json('stats')->nullable();
            $table->string('leadership_title')->nullable();
            $table->string('leadership_highlight')->nullable();
            $table->text('leadership_intro')->nullable();
            $table->json('leaders')->nullable();
            $table->string('news_title')->nullable();
            $table->string('news_highlight')->nullable();
            $table->text('news_intro')->nullable();
            $table->json('news_items')->nullable();
            $table->string('partners_title')->nullable();
            $table->string('partners_subtitle')->nullable();
            $table->json('partners')->nullable();
            $table->string('bottom_cta_title')->nullable();
            $table->text('bottom_cta_text')->nullable();
            $table->string('bottom_cta_button_1_text')->nullable();
            $table->string('bottom_cta_button_1_url')->nullable();
            $table->string('bottom_cta_button_2_text')->nullable();
            $table->string('bottom_cta_button_2_url')->nullable();
            $table->string('bottom_cta_background_image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
