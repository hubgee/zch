<?php

namespace App\Filament\Resources\DownloadsPages;

use App\Filament\Resources\DownloadsPages\Pages\CreateDownloadsPage;
use App\Filament\Resources\DownloadsPages\Pages\EditDownloadsPage;
use App\Filament\Resources\DownloadsPages\Pages\ListDownloadsPages;
use App\Filament\Resources\DownloadsPages\Pages\ViewDownloadsPage;
use App\Filament\Resources\DownloadsPages\Schemas\DownloadsPageForm;
use App\Filament\Resources\DownloadsPages\Schemas\DownloadsPageInfolist;
use App\Filament\Resources\DownloadsPages\Tables\DownloadsPagesTable;
use App\Models\DownloadsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DownloadsPageResource extends Resource
{
    protected static ?string $model = DownloadsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArrowDownTray;

    protected static string|UnitEnum|null $navigationGroup = 'Resource Center';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Downloads';

    protected static ?string $modelLabel = 'Downloads Page';

    protected static ?string $pluralModelLabel = 'Downloads Pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return DownloadsPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DownloadsPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DownloadsPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDownloadsPages::route('/'),
            'create' => CreateDownloadsPage::route('/create'),
            'view' => ViewDownloadsPage::route('/{record}'),
            'edit' => EditDownloadsPage::route('/{record}/edit'),
        ];
    }
}
