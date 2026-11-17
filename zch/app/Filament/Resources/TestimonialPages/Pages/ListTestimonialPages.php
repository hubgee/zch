<?php

namespace App\Filament\Resources\TestimonialPages\Pages;

use App\Filament\Resources\TestimonialPages\TestimonialPageResource;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialPages extends ListRecords
{
    protected static string $resource = TestimonialPageResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
