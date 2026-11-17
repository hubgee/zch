<?php

namespace App\Filament\Resources\EventsPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class EventsPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
