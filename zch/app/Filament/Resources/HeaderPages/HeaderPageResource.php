<?php

namespace App\Filament\Resources\HeaderPages;

use App\Filament\Resources\HeaderPages\Pages\CreateHeaderPage;
use App\Filament\Resources\HeaderPages\Pages\EditHeaderPage;
use App\Filament\Resources\HeaderPages\Pages\ListHeaderPages;
use App\Filament\Resources\HeaderPages\Pages\ViewHeaderPage;
use App\Filament\Resources\HeaderPages\Schemas\HeaderPageForm;
use App\Filament\Resources\HeaderPages\Schemas\HeaderPageInfolist;
use App\Filament\Resources\HeaderPages\Tables\HeaderPagesTable;
use App\Models\HeaderPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HeaderPageResource extends Resource
{
    protected static ?string $model = HeaderPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBars3;

    protected static string|UnitEnum|null $navigationGroup = null;

    protected static ?int $navigationSort = -10;

    protected static ?string $navigationLabel = 'Header';

    protected static ?string $modelLabel = 'Header';

    protected static ?string $pluralModelLabel = 'Header';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HeaderPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HeaderPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeaderPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHeaderPages::route('/'),
            'create' => CreateHeaderPage::route('/create'),
            'view' => ViewHeaderPage::route('/{record}'),
            'edit' => EditHeaderPage::route('/{record}/edit'),
        ];
    }
}
