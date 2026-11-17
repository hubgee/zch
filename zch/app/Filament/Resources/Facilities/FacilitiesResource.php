<?php

namespace App\Filament\Resources\Facilities;

use App\Filament\Resources\Facilities\Pages\CreateFacilities;
use App\Filament\Resources\Facilities\Pages\EditFacilities;
use App\Filament\Resources\Facilities\Pages\ListFacilities;
use App\Filament\Resources\Facilities\Pages\ViewFacilities;
use App\Filament\Resources\Facilities\Schemas\FacilitiesForm;
use App\Filament\Resources\Facilities\Schemas\FacilitiesInfolist;
use App\Filament\Resources\Facilities\Tables\FacilitiesTable;
use App\Models\Facilities;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FacilitiesResource extends Resource
{
    protected static ?string $model = Facilities::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice;

    protected static string|UnitEnum|null $navigationGroup = 'About Us';

    protected static ?int $navigationSort = 6;

    protected static ?string $navigationLabel = 'Our Facilities';

    protected static ?string $modelLabel = 'Our Facilities';

    protected static ?string $pluralModelLabel = 'Our Facilities';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return FacilitiesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FacilitiesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FacilitiesTable::configure($table);
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
            'index' => ListFacilities::route('/'),
            'create' => CreateFacilities::route('/create'),
            'view' => ViewFacilities::route('/{record}'),
            'edit' => EditFacilities::route('/{record}/edit'),
        ];
    }
}
