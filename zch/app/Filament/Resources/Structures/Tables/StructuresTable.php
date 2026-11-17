<?php

namespace App\Filament\Resources\Structures\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class StructuresTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
