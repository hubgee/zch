<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasEditablePageContent;

    protected $fillable = [
        'title',
        'slug',
        'content_html',
        'content_data',
        'is_published',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'content_data' => 'array',
            'sort_order' => 'integer',
        ];
    }

    public static function allPublished(): \Illuminate\Database\Eloquent\Collection
    {
        return static::query()
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();
    }

    public static function findBySlug(string $slug): ?static
    {
        return static::query()
            ->where('is_published', true)
            ->where('slug', $slug)
            ->first();
    }
}
