<?php

namespace App\Filament\Resources\SpecialistDoctors\Pages;

use App\Filament\Resources\SpecialistDoctors\SpecialistDoctorResource;
use Filament\Resources\Pages\ListRecords;

class ListSpecialistDoctors extends ListRecords
{
    protected static string $resource = SpecialistDoctorResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
