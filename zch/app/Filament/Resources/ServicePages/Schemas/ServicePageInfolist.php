<?php

namespace App\Filament\Resources\ServicePages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ServicePageInfolist
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
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
