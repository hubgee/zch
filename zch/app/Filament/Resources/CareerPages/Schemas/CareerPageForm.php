<?php

namespace App\Filament\Resources\CareerPages\Schemas;

use App\Support\Filament\FileUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class CareerPageForm
{
    private static function itemSchema(): array
    {
        return [
            TextInput::make('title')
                ->label('Job Title')
                ->required(),
            TextInput::make('location')
                ->label('Location')
                ->default('Zomba Central Hospital'),
            TextInput::make('grade')
                ->label('Grade / Level'),
            TextInput::make('publishDate')
                ->label('Publish Date')
                ->placeholder('2026-04-12'),
            TextInput::make('archivedDate')
                ->label('Archived Date')
                ->placeholder('2026-06-01'),
            TextInput::make('downloads')
                ->label('Downloads Count')
                ->numeric()
                ->default(0),
            FileUploadField::make('file', 'careers')
                ->label('Upload File')
                ->helperText('PDF or document file'),
            TextInput::make('file_url')
                ->label('Or External URL')
                ->helperText('Leave empty if file uploaded above'),
            Textarea::make('search')
                ->label('Search Keywords')
                ->rows(2)
                ->helperText('Extra keywords for search filtering'),
        ];
    }

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255)->unique(ignoreRecord: true),
                Toggle::make('is_published')->default(true),

                Tabs::make('Careers Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.hero_title')
                                    ->label('Hero Title')
                                    ->default('Career Opportunities at Zomba Central Hospital')
                                    ->required(),
                                Textarea::make('content_data.hero_description')
                                    ->label('Hero Description')
                                    ->default('Explore current job openings, view shortlisted candidates, appointment notices, and access archived vacancies from the Health Service Commission.')
                                    ->rows(3),
                            ]),

                        Tab::make('Advertised Jobs')
                            ->schema([
                                Repeater::make('content_data.advertised')
                                    ->label('Advertised Jobs')
                                    ->schema(static::itemSchema())
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(0),
                            ]),

                        Tab::make('Shortlisted')
                            ->schema([
                                Repeater::make('content_data.shortlisted')
                                    ->label('Shortlisted Candidates')
                                    ->schema(static::itemSchema())
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(0),
                            ]),

                        Tab::make('Appointments')
                            ->schema([
                                Repeater::make('content_data.appointments')
                                    ->label('Appointments')
                                    ->schema(static::itemSchema())
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(0),
                            ]),

                        Tab::make('Instructions')
                            ->schema([
                                Repeater::make('content_data.instructions')
                                    ->label('Instructions')
                                    ->schema(static::itemSchema())
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(0),
                            ]),

                        Tab::make('Archived Jobs')
                            ->schema([
                                Repeater::make('content_data.archived')
                                    ->label('Archived Jobs')
                                    ->schema(static::itemSchema())
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(0),
                            ]),
                    ]),
            ]);
    }
}
