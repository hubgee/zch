<?php

namespace App\Filament\Resources\EventsPages\Pages;

use App\Filament\Resources\EventsPages\EventsPageResource;
use Filament\Resources\Pages\ListRecords;

class ListEventsPage extends ListRecords
{
    protected static string $resource = EventsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
