<?php

namespace App\Filament\Resources\EventsPages;

use App\Filament\Resources\EventsPages\Pages\CreateEventsPage;
use App\Filament\Resources\EventsPages\Pages\EditEventsPage;
use App\Filament\Resources\EventsPages\Pages\ListEventsPage;
use App\Filament\Resources\EventsPages\Pages\ViewEventsPage;
use App\Filament\Resources\EventsPages\Schemas\EventsPageForm;
use App\Filament\Resources\EventsPages\Schemas\EventsPageInfolist;
use App\Filament\Resources\EventsPages\Tables\EventsPagesTable;
use App\Models\EventsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class EventsPageResource extends Resource
{
    protected static ?string $model = EventsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static string|UnitEnum|null $navigationGroup = 'Resource Center';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Events Calendar';

    protected static ?string $modelLabel = 'Events Page';

    protected static ?string $pluralModelLabel = 'Events Pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return EventsPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EventsPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventsPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEventsPage::route('/'),
            'create' => CreateEventsPage::route('/create'),
            'view' => ViewEventsPage::route('/{record}'),
            'edit' => EditEventsPage::route('/{record}/edit'),
        ];
    }
}
