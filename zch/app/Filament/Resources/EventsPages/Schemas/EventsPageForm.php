<?php

namespace App\Filament\Resources\EventsPages\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class EventsPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Events Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.hero_title')
                                    ->label('Hero Title')
                                    ->default('Hospital Events & Public Health Calendar')
                                    ->maxLength(255),
                                Textarea::make('content_data.hero_text')
                                    ->label('Hero Text')
                                    ->rows(3)
                                    ->placeholder('Track upcoming health events, public seminars, and community outreach programs...'),
                            ]),

                        Tab::make('Events')
                            ->schema([
                                Repeater::make('content_data.events')
                                    ->label('Events')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Event Title')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('date')
                                            ->label('Date')
                                            ->placeholder('2026-01-10')
                                            ->helperText('Format: YYYY-MM-DD'),
                                        TextInput::make('venue')
                                            ->label('Venue')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('type')
                                            ->label('Type')
                                            ->placeholder('Planning')
                                            ->maxLength(255),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2),
                                        ImageUploadField::make('image', 'images/events')
                                            ->label('Event Image'),
                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(5),
                            ]),

                        Tab::make('CTA Footer')
                            ->schema([
                                TextInput::make('content_data.cta_title')
                                    ->label('CTA Title')
                                    ->maxLength(255),
                                Textarea::make('content_data.cta_text')
                                    ->label('CTA Text')
                                    ->rows(3),
                                TextInput::make('content_data.cta_button_1_text')
                                    ->label('Button 1 Text')
                                    ->maxLength(255),
                                TextInput::make('content_data.cta_button_1_url')
                                    ->label('Button 1 URL')
                                    ->helperText('Route name or URL'),
                                TextInput::make('content_data.cta_button_2_text')
                                    ->label('Button 2 Text')
                                    ->maxLength(255),
                                TextInput::make('content_data.cta_button_2_url')
                                    ->label('Button 2 URL')
                                    ->helperText('Route name or URL'),
                            ]),
                    ]),
            ]);
    }
}
