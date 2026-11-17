<?php

namespace App\Filament\Resources\TestimonialPages\Pages;

use App\Filament\Resources\TestimonialPages\TestimonialPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTestimonialPage extends ViewRecord
{
    protected static string $resource = TestimonialPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
