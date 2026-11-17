<?php

namespace App\Filament\Resources\Organograms\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class OrganogramsTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
