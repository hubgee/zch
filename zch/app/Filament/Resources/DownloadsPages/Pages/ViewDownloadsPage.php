<?php

namespace App\Filament\Resources\DownloadsPages\Pages;

use App\Filament\Resources\DownloadsPages\DownloadsPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDownloadsPage extends ViewRecord
{
    protected static string $resource = DownloadsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
