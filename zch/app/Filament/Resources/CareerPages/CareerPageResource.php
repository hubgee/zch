<?php

namespace App\Filament\Resources\CareerPages;

use App\Filament\Resources\CareerPages\Pages\CreateCareerPage;
use App\Filament\Resources\CareerPages\Pages\EditCareerPage;
use App\Filament\Resources\CareerPages\Pages\ListCareerPages;
use App\Filament\Resources\CareerPages\Pages\ViewCareerPage;
use App\Filament\Resources\CareerPages\Schemas\CareerPageForm;
use App\Filament\Resources\CareerPages\Schemas\CareerPageInfolist;
use App\Filament\Resources\CareerPages\Tables\CareerPagesTable;
use App\Models\CareerPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CareerPageResource extends Resource
{
    protected static ?string $model = CareerPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static string|UnitEnum|null $navigationGroup = 'Resource Center';

    protected static ?int $navigationSort = 7;

    protected static ?string $navigationLabel = 'Careers';

    protected static ?string $modelLabel = 'Careers Page';

    protected static ?string $pluralModelLabel = 'Careers Pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return CareerPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CareerPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CareerPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCareerPages::route('/'),
            'create' => CreateCareerPage::route('/create'),
            'view' => ViewCareerPage::route('/{record}'),
            'edit' => EditCareerPage::route('/{record}/edit'),
        ];
    }
}
