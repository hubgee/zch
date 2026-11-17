<?php

namespace App\Filament\Resources\HeaderPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class HeaderPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
