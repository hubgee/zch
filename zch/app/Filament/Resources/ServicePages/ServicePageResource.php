<?php

namespace App\Filament\Resources\ServicePages;

use App\Filament\Resources\ServicePages\Pages\CreateServicePage;
use App\Filament\Resources\ServicePages\Pages\EditServicePage;
use App\Filament\Resources\ServicePages\Pages\ListServicePages;
use App\Filament\Resources\ServicePages\Pages\ViewServicePage;
use App\Filament\Resources\ServicePages\Schemas\ServicePageForm;
use App\Filament\Resources\ServicePages\Schemas\ServicePageInfolist;
use App\Filament\Resources\ServicePages\Tables\ServicePagesTable;
use App\Models\ServicePage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServicePageResource extends Resource
{
    protected static ?string $model = ServicePage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

    protected static ?string $navigationLabel = 'Services';

    protected static ?string $modelLabel = 'Services Page';

    protected static ?string $pluralModelLabel = 'Services Pages';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return ServicePageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ServicePageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicePagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicePages::route('/'),
            'create' => CreateServicePage::route('/create'),
            'view' => ViewServicePage::route('/{record}'),
            'edit' => EditServicePage::route('/{record}/edit'),
        ];
    }
}
