<?php

namespace App\Filament\Resources\LatestNews;

use App\Filament\Resources\LatestNews\Pages\CreateLatestNews;
use App\Filament\Resources\LatestNews\Pages\EditLatestNews;
use App\Filament\Resources\LatestNews\Pages\ListLatestNews;
use App\Filament\Resources\LatestNews\Pages\ViewLatestNews;
use App\Filament\Resources\LatestNews\Schemas\LatestNewsForm;
use App\Filament\Resources\LatestNews\Schemas\LatestNewsInfolist;
use App\Filament\Resources\LatestNews\Tables\LatestNewsTable;
use App\Models\LatestNews;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class LatestNewsResource extends Resource
{
    protected static ?string $model = LatestNews::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static string|UnitEnum|null $navigationGroup = 'Resource Center';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Latest News';

    protected static ?string $modelLabel = 'Latest News Page';

    protected static ?string $pluralModelLabel = 'Latest News Pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return LatestNewsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LatestNewsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LatestNewsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLatestNews::route('/'),
            'create' => CreateLatestNews::route('/create'),
            'view' => ViewLatestNews::route('/{record}'),
            'edit' => EditLatestNews::route('/{record}/edit'),
        ];
    }
}
