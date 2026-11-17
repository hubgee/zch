<?php

namespace App\Filament\Resources\Management\Pages;

use App\Filament\Resources\Management\ManagementResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewManagement extends ViewRecord
{
    protected static string $resource = ManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
