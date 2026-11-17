<?php

namespace App\Filament\Resources\Organograms;

use App\Filament\Resources\Organograms\Pages\CreateOrganogram;
use App\Filament\Resources\Organograms\Pages\EditOrganogram;
use App\Filament\Resources\Organograms\Pages\ListOrganograms;
use App\Filament\Resources\Organograms\Pages\ViewOrganogram;
use App\Filament\Resources\Organograms\Schemas\OrganogramForm;
use App\Filament\Resources\Organograms\Schemas\OrganogramInfolist;
use App\Filament\Resources\Organograms\Tables\OrganogramsTable;
use App\Models\Organogram;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class OrganogramResource extends Resource
{
    protected static ?string $model = Organogram::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBarSquare;

    protected static string|UnitEnum|null $navigationGroup = 'About Us';

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = 'Organogram';

    protected static ?string $modelLabel = 'Organogram';

    protected static ?string $pluralModelLabel = 'Organogram';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return OrganogramForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OrganogramInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrganogramsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrganograms::route('/'),
            'create' => CreateOrganogram::route('/create'),
            'view' => ViewOrganogram::route('/{record}'),
            'edit' => EditOrganogram::route('/{record}/edit'),
        ];
    }
}
