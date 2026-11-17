<?php

namespace App\Filament\Resources\Organograms\Pages;

use App\Filament\Resources\Organograms\OrganogramResource;
use Filament\Resources\Pages\ListRecords;

class ListOrganograms extends ListRecords
{
    protected static string $resource = OrganogramResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
