<?php

namespace App\Filament\Resources\CareerPages\Pages;

use App\Filament\Resources\CareerPages\CareerPageResource;
use Filament\Resources\Pages\ListRecords;

class ListCareerPages extends ListRecords
{
    protected static string $resource = CareerPageResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
