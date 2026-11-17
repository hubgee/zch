<?php

namespace App\Filament\Resources\FooterPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class FooterPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
