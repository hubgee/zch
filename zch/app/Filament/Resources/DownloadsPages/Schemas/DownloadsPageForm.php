<?php

namespace App\Filament\Resources\DownloadsPages\Schemas;

use App\Support\Filament\FileUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class DownloadsPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255)->unique(ignoreRecord: true),
                Toggle::make('is_published')->default(true),

                Tabs::make('Downloads Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.hero_title')
                                    ->label('Hero Title')
                                    ->default('Downloads Library')
                                    ->maxLength(255),
                                Textarea::make('content_data.hero_text')
                                    ->label('Hero Text')
                                    ->rows(3)
                                    ->default('Find official forms, service guides, policy documents, and patient information resources.'),
                            ]),

                        Tab::make('Categories')
                            ->schema([
                                Repeater::make('content_data.categories')
                                    ->label('Categories')
                                    ->schema([
                                        TextInput::make('id')
                                            ->label('Category ID')
                                            ->placeholder('forms')
                                            ->required(),
                                        TextInput::make('name')
                                            ->label('Category Name')
                                            ->placeholder('Forms')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->defaultItems(4),
                            ]),

                        Tab::make('Documents')
                            ->schema([
                                Repeater::make('content_data.documents')
                                    ->label('Documents')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Document Title')
                                            ->required(),
                                        TextInput::make('category')
                                            ->label('Category ID')
                                            ->placeholder('forms')
                                            ->helperText('Must match a category ID above'),
                                        TextInput::make('date')
                                            ->label('Date')
                                            ->placeholder('2026-04-12'),
                                        TextInput::make('type')
                                            ->label('Type')
                                            ->placeholder('Form'),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2),
                                        FileUploadField::make('file', 'documents')
                                            ->label('Upload File')
                                            ->helperText('Upload PDF, DOC, or any file type'),
                                        TextInput::make('file_url')
                                            ->label('Or External URL')
                                            ->placeholder('https://example.com/file.pdf')
                                            ->helperText('Use this if file is hosted externally (leave empty if uploaded above)'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(6),
                            ]),
                    ]),
            ]);
    }
}
