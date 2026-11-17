<?php

namespace App\Filament\Resources\CareerPages\Pages;

use App\Filament\Resources\CareerPages\CareerPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCareerPage extends EditRecord
{
    protected static string $resource = CareerPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
