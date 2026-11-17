<?php

namespace App\Filament\Resources\CareerPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class CareerPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
