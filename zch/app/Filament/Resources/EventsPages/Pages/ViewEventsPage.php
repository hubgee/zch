<?php

namespace App\Filament\Resources\EventsPages\Pages;

use App\Filament\Resources\EventsPages\EventsPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEventsPage extends ViewRecord
{
    protected static string $resource = EventsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
