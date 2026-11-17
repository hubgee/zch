<?php

namespace App\Filament\Resources\TestimonialPages\Tables;

use App\Support\Filament\EditablePageContentTable;
use Filament\Tables\Table;

class TestimonialPagesTable
{
    public static function configure(Table $table): Table
    {
        return EditablePageContentTable::configure($table);
    }
}
