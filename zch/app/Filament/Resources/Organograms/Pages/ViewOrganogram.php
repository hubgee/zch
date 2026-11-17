<?php

namespace App\Filament\Resources\Organograms\Pages;

use App\Filament\Resources\Organograms\OrganogramResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOrganogram extends ViewRecord
{
    protected static string $resource = OrganogramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
