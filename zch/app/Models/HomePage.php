<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class HomePage extends Model
{
    protected $fillable = [
        'title',
        'sliders',
        'cta_blocks',
        'about_title',
        'about_subtitle',
        'about_paragraph_1',
        'about_paragraph_2',
        'about_image',
        'about_button_url',
        'stats',
        'leadership_title',
        'leadership_highlight',
        'leadership_intro',
        'leaders',
        'news_title',
        'news_highlight',
        'news_intro',
        'news_items',
        'partners_title',
        'partners_subtitle',
        'partners',
        'bottom_cta_title',
        'bottom_cta_text',
        'bottom_cta_button_1_text',
        'bottom_cta_button_1_url',
        'bottom_cta_button_2_text',
        'bottom_cta_button_2_url',
        'bottom_cta_background_image',
    ];

    protected function casts(): array
    {
        return [
            'sliders' => 'array',
            'cta_blocks' => 'array',
            'stats' => 'array',
            'leaders' => 'array',
            'news_items' => 'array',
            'partners' => 'array',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (HomePage $homePage): void {
            $homePage->normalizeImageFields();
        });
    }

    public static function current(): self
    {
        return static::query()->firstOrFail();
    }

    public static function resolveUrl(?string $value): string
    {
        if (blank($value)) {
            return '#';
        }

        if (str_starts_with($value, 'http') || str_starts_with($value, 'tel:') || str_starts_with($value, 'mailto:')) {
            return $value;
        }

        if (Route::has($value)) {
            return route($value);
        }

        return url($value);
    }

    public static function assetUrl(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        if (str_starts_with($path, 'http')) {
            return $path;
        }

        return asset(ltrim($path, '/'));
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    public static function normalizeFormImageData(array $data): array
    {
        $page = new static;

        $data['about_image'] = $page->normalizeImageValue($data['about_image'] ?? null, requireExists: true);
        $data['bottom_cta_background_image'] = $page->normalizeImageValue($data['bottom_cta_background_image'] ?? null, requireExists: true);
        $data['sliders'] = $page->normalizeCollectionImages($data['sliders'] ?? null, ['background_image'], requireExists: true);
        $data['leaders'] = $page->normalizeCollectionImages($data['leaders'] ?? null, ['image'], requireExists: true);
        $data['news_items'] = $page->normalizeCollectionImages($data['news_items'] ?? null, ['image'], requireExists: true);
        $data['partners'] = $page->normalizeCollectionImages($data['partners'] ?? null, ['logo'], requireExists: true);

        return $data;
    }

    public function normalizeImageFields(): void
    {
        $this->about_image = $this->normalizeImageValue($this->about_image);
        $this->bottom_cta_background_image = $this->normalizeImageValue($this->bottom_cta_background_image);
        $this->sliders = $this->normalizeCollectionImages($this->sliders, ['background_image']);
        $this->leaders = $this->normalizeCollectionImages($this->leaders, ['image']);
        $this->news_items = $this->normalizeCollectionImages($this->news_items, ['image']);
        $this->partners = $this->normalizeCollectionImages($this->partners, ['logo']);
    }

    /**
     * @param  array<int, array<string, mixed>>|null  $items
     * @param  list<string>  $imageKeys
     * @return array<int, array<string, mixed>>|null
     */
    public function normalizeCollectionImages(?array $items, array $imageKeys, bool $requireExists = false): ?array
    {
        if (blank($items)) {
            return $items;
        }

        return collect($items)
            ->map(function (array $item) use ($imageKeys, $requireExists): array {
                foreach ($imageKeys as $key) {
                    if (array_key_exists($key, $item)) {
                        $item[$key] = $this->normalizeImageValue($item[$key], $requireExists);
                    }
                }

                return $item;
            })
            ->values()
            ->all();
    }

    public function normalizeImageValue(mixed $value, bool $requireExists = false): ?string
    {
        if (blank($value)) {
            return null;
        }

        if (is_array($value)) {
            $value = Arr::first(array_filter(Arr::wrap($value), fn (mixed $item): bool => filled($item)));
        }

        if (! is_string($value)) {
            return null;
        }

        $path = ltrim($value, '/');

        if ($requireExists && ! Storage::disk('public_assets')->exists($path)) {
            return null;
        }

        return $path;
    }
}
