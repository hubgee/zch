<?php

namespace App\Filament\Resources\Management;

use App\Filament\Resources\Management\Pages\CreateManagement;
use App\Filament\Resources\Management\Pages\EditManagement;
use App\Filament\Resources\Management\Pages\ListManagement;
use App\Filament\Resources\Management\Pages\ViewManagement;
use App\Filament\Resources\Management\Schemas\ManagementForm;
use App\Filament\Resources\Management\Schemas\ManagementInfolist;
use App\Filament\Resources\Management\Tables\ManagementTable;
use App\Models\Management;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ManagementResource extends Resource
{
    protected static ?string $model = Management::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static string|UnitEnum|null $navigationGroup = 'Medical Team';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Hospital Management';

    protected static ?string $modelLabel = 'Hospital Management';

    protected static ?string $pluralModelLabel = 'Hospital Management';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ManagementForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ManagementInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ManagementTable::configure($table);
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
            'index' => ListManagement::route('/'),
            'create' => CreateManagement::route('/create'),
            'view' => ViewManagement::route('/{record}'),
            'edit' => EditManagement::route('/{record}/edit'),
        ];
    }
}
