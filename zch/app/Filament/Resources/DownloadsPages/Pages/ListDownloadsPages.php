<?php

namespace App\Filament\Resources\DownloadsPages\Pages;

use App\Filament\Resources\DownloadsPages\DownloadsPageResource;
use Filament\Resources\Pages\ListRecords;

class ListDownloadsPages extends ListRecords
{
    protected static string $resource = DownloadsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
