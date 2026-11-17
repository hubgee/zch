<?php

namespace App\Filament\Resources\SpecialistDoctors;

use App\Filament\Resources\SpecialistDoctors\Pages\CreateSpecialistDoctor;
use App\Filament\Resources\SpecialistDoctors\Pages\EditSpecialistDoctor;
use App\Filament\Resources\SpecialistDoctors\Pages\ListSpecialistDoctors;
use App\Filament\Resources\SpecialistDoctors\Pages\ViewSpecialistDoctor;
use App\Filament\Resources\SpecialistDoctors\Schemas\SpecialistDoctorForm;
use App\Filament\Resources\SpecialistDoctors\Schemas\SpecialistDoctorInfolist;
use App\Filament\Resources\SpecialistDoctors\Tables\SpecialistDoctorsTable;
use App\Models\SpecialistDoctor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SpecialistDoctorResource extends Resource
{
    protected static ?string $model = SpecialistDoctor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static string|UnitEnum|null $navigationGroup = 'Medical Team';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Specialist Doctors';

    protected static ?string $modelLabel = 'Specialist Doctors';

    protected static ?string $pluralModelLabel = 'Specialist Doctors';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return SpecialistDoctorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SpecialistDoctorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SpecialistDoctorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSpecialistDoctors::route('/'),
            'create' => CreateSpecialistDoctor::route('/create'),
            'view' => ViewSpecialistDoctor::route('/{record}'),
            'edit' => EditSpecialistDoctor::route('/{record}/edit'),
        ];
    }

}
