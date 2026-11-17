<?php

namespace App\Filament\Resources\DownloadsPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class DownloadsPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
