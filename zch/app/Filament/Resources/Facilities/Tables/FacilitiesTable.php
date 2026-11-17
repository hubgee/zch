<?php

namespace App\Filament\Resources\Facilities\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class FacilitiesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
