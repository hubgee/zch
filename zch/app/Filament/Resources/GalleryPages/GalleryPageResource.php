<?php

namespace App\Filament\Resources\GalleryPages;

use App\Filament\Resources\GalleryPages\Pages\CreateGalleryPage;
use App\Filament\Resources\GalleryPages\Pages\EditGalleryPage;
use App\Filament\Resources\GalleryPages\Pages\ListGalleryPages;
use App\Filament\Resources\GalleryPages\Pages\ViewGalleryPage;
use App\Filament\Resources\GalleryPages\Schemas\GalleryPageForm;
use App\Filament\Resources\GalleryPages\Schemas\GalleryPageInfolist;
use App\Filament\Resources\GalleryPages\Tables\GalleryPagesTable;
use App\Models\GalleryPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class GalleryPageResource extends Resource
{
    protected static ?string $model = GalleryPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static string|UnitEnum|null $navigationGroup = 'Resource Center';

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = 'Gallery';

    protected static ?string $modelLabel = 'Gallery Page';

    protected static ?string $pluralModelLabel = 'Gallery Pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return GalleryPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GalleryPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGalleryPages::route('/'),
            'create' => CreateGalleryPage::route('/create'),
            'view' => ViewGalleryPage::route('/{record}'),
            'edit' => EditGalleryPage::route('/{record}/edit'),
        ];
    }
}
