<?php

namespace App\Filament\Resources\CareerPages\Pages;

use App\Filament\Resources\CareerPages\CareerPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCareerPage extends ViewRecord
{
    protected static string $resource = CareerPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
