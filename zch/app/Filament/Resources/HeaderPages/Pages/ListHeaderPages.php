<?php

namespace App\Filament\Resources\HeaderPages\Pages;

use App\Filament\Resources\HeaderPages\HeaderPageResource;
use Filament\Resources\Pages\ListRecords;

class ListHeaderPages extends ListRecords
{
    protected static string $resource = HeaderPageResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
