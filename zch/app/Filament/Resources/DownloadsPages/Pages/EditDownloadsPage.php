<?php

namespace App\Filament\Resources\DownloadsPages\Pages;

use App\Filament\Resources\DownloadsPages\DownloadsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDownloadsPage extends EditRecord
{
    protected static string $resource = DownloadsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
