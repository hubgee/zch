<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        foreach (['abouts', 'management', 'structures', 'faqs', 'organograms', 'facilities'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table): void {
                $table->json('content_data')->nullable()->after('content_html');
            });
        }
    }

    public function down(): void
    {
        foreach (['abouts', 'management', 'structures', 'faqs', 'organograms', 'facilities'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table): void {
                $table->dropColumn('content_data');
            });
        }
    }
};
