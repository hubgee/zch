<?php

namespace App\Filament\Resources\SpecialistDoctors\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class SpecialistDoctorsTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
