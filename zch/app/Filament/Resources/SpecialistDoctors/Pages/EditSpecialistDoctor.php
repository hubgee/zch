<?php

namespace App\Filament\Resources\SpecialistDoctors\Pages;

use App\Filament\Resources\SpecialistDoctors\SpecialistDoctorResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSpecialistDoctor extends EditRecord
{
    protected static string $resource = SpecialistDoctorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
