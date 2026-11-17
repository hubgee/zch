<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DepartmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('slug'),
                TextEntry::make('is_published')
                    ->label('Published')
                    ->boolean(),
                TextEntry::make('sort_order')
                    ->label('Sort Order'),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
