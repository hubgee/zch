<?php

namespace App\Filament\Resources\GalleryPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class GalleryPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
