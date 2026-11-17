<?php

namespace App\Filament\Resources\Abouts\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
