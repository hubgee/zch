<?php

namespace App\Filament\Resources\Organograms\Pages;

use App\Filament\Resources\Organograms\OrganogramResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditOrganogram extends EditRecord
{
    protected static string $resource = OrganogramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
