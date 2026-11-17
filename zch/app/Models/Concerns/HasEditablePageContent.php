<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Model;

trait HasEditablePageContent
{
    public function initializeHasEditablePageContent(): void
    {
        $this->fillable([
            'title',
            'slug',
            'content_html',
            'content_data',
            'is_published',
        ]);
    }

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'content_data' => 'array',
        ];
    }

    public static function current(): ?Model
    {
        return static::query()
            ->where('is_published', true)
            ->oldest('id')
            ->first();
    }
}
