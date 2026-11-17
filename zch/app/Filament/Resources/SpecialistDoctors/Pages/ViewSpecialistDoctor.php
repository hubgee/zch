<?php

namespace App\Filament\Resources\SpecialistDoctors\Pages;

use App\Filament\Resources\SpecialistDoctors\SpecialistDoctorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSpecialistDoctor extends ViewRecord
{
    protected static string $resource = SpecialistDoctorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
