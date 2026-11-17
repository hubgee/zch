<?php

namespace App\Filament\Resources\LatestNews\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class LatestNewsTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
