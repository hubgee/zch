<?php

namespace App\Filament\Resources\OnlineApplicationPages\Pages;

use App\Filament\Resources\OnlineApplicationPages\OnlineApplicationPageResource;
use Filament\Resources\Pages\ListRecords;

class ListOnlineApplicationPages extends ListRecords
{
    protected static string $resource = OnlineApplicationPageResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
