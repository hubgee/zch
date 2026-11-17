<?php

namespace App\Filament\Resources\EventsPages\Pages;

use App\Filament\Resources\EventsPages\EventsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEventsPage extends EditRecord
{
    protected static string $resource = EventsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
