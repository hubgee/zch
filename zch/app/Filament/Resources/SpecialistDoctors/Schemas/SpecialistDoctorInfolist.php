<?php

namespace App\Filament\Resources\SpecialistDoctors\Schemas;

use App\Support\Filament\EditablePageContentInfolist;
use Filament\Schemas\Schema;

class SpecialistDoctorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return EditablePageContentInfolist::configure($schema);
    }
}
