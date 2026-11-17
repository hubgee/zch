<?php

namespace App\Filament\Resources\OnlineApplicationPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class OnlineApplicationPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
