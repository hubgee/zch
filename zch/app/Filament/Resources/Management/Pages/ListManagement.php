<?php

namespace App\Filament\Resources\Management\Pages;

use App\Filament\Resources\Management\ManagementResource;
use Filament\Resources\Pages\ListRecords;

class ListManagement extends ListRecords
{
    protected static string $resource = ManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
