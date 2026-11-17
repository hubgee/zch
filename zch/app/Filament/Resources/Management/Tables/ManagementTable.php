<?php

namespace App\Filament\Resources\Management\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class ManagementTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
