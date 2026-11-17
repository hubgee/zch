<?php

namespace App\Filament\Resources\TestimonialPages\Pages;

use App\Filament\Resources\TestimonialPages\TestimonialPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialPage extends EditRecord
{
    protected static string $resource = TestimonialPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
