<?php

namespace App\Filament\Resources\OnlineApplicationPages;

use App\Filament\Resources\OnlineApplicationPages\Pages\CreateOnlineApplicationPage;
use App\Filament\Resources\OnlineApplicationPages\Pages\EditOnlineApplicationPage;
use App\Filament\Resources\OnlineApplicationPages\Pages\ListOnlineApplicationPages;
use App\Filament\Resources\OnlineApplicationPages\Pages\ViewOnlineApplicationPage;
use App\Filament\Resources\OnlineApplicationPages\Schemas\OnlineApplicationPageForm;
use App\Filament\Resources\OnlineApplicationPages\Schemas\OnlineApplicationPageInfolist;
use App\Filament\Resources\OnlineApplicationPages\Tables\OnlineApplicationPagesTable;
use App\Models\OnlineApplicationPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class OnlineApplicationPageResource extends Resource
{
    protected static ?string $model = OnlineApplicationPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static string|UnitEnum|null $navigationGroup = 'Resource Center';

    protected static ?int $navigationSort = 8;

    protected static ?string $navigationLabel = 'Online Application';

    protected static ?string $modelLabel = 'Online Application Page';

    protected static ?string $pluralModelLabel = 'Online Application Pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return OnlineApplicationPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OnlineApplicationPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OnlineApplicationPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOnlineApplicationPages::route('/'),
            'create' => CreateOnlineApplicationPage::route('/create'),
            'view' => ViewOnlineApplicationPage::route('/{record}'),
            'edit' => EditOnlineApplicationPage::route('/{record}/edit'),
        ];
    }
}
