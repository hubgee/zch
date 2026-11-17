<?php

namespace App\Filament\Resources\HomePages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HomePageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('about_title')
                    ->label('About title'),
                TextEntry::make('leadership_title')
                    ->label('Leadership title'),
                TextEntry::make('news_title')
                    ->label('News title'),
                TextEntry::make('partners_title')
                    ->label('Partners title'),
                TextEntry::make('bottom_cta_title')
                    ->label('Bottom CTA title'),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
