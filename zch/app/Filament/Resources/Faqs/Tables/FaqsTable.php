<?php

namespace App\Filament\Resources\Faqs\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
