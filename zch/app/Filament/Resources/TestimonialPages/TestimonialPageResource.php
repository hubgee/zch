<?php

namespace App\Filament\Resources\TestimonialPages;

use App\Filament\Resources\TestimonialPages\Pages\CreateTestimonialPage;
use App\Filament\Resources\TestimonialPages\Pages\EditTestimonialPage;
use App\Filament\Resources\TestimonialPages\Pages\ListTestimonialPages;
use App\Filament\Resources\TestimonialPages\Pages\ViewTestimonialPage;
use App\Filament\Resources\TestimonialPages\Schemas\TestimonialPageForm;
use App\Filament\Resources\TestimonialPages\Schemas\TestimonialPageInfolist;
use App\Filament\Resources\TestimonialPages\Tables\TestimonialPagesTable;
use App\Models\TestimonialPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TestimonialPageResource extends Resource
{
    protected static ?string $model = TestimonialPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleBottomCenterText;

    protected static string|UnitEnum|null $navigationGroup = 'Resource Center';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Testimonials';

    protected static ?string $modelLabel = 'Testimonials Page';

    protected static ?string $pluralModelLabel = 'Testimonials Pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return TestimonialPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TestimonialPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestimonialPagesTable::configure($table);
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
            'index' => ListTestimonialPages::route('/'),
            'create' => CreateTestimonialPage::route('/create'),
            'view' => ViewTestimonialPage::route('/{record}'),
            'edit' => EditTestimonialPage::route('/{record}/edit'),
        ];
    }
}
