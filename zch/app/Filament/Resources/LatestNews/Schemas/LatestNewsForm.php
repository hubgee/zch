<?php

namespace App\Filament\Resources\LatestNews\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class LatestNewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Toggle::make('is_published')
                    ->default(true),

                Tabs::make('News Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.page_heading_label')
                                    ->label('Heading Label')
                                    ->default('Latest')
                                    ->helperText('First part of heading'),
                                TextInput::make('content_data.page_heading_highlight')
                                    ->label('Heading Highlight')
                                    ->default('News')
                                    ->helperText('Second part of heading (styled differently)'),
                                Textarea::make('content_data.page_description')
                                    ->label('Page Description')
                                    ->rows(3),
                            ]),

                        Tab::make('News Articles')
                            ->schema([
                                Repeater::make('content_data.articles')
                                    ->label('News Articles')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Article Title')
                                            ->required(),
                                        TextInput::make('slug')
                                            ->label('Article Slug')
                                            ->helperText('Optional URL slug. Leave empty to generate it from the title.'),
                                        TextInput::make('author')
                                            ->label('Author'),
                                        TextInput::make('date')
                                            ->label('Publication Date')
                                            ->placeholder('08 January 2020'),
                                        TextInput::make('meta')
                                            ->label('Meta')
                                            ->placeholder('By James Anderson / 08 January 2020')
                                            ->helperText('Author and date info'),
                                        Textarea::make('excerpt')
                                            ->label('Excerpt')
                                            ->rows(3),
                                        Textarea::make('content')
                                            ->label('Full Article Content')
                                            ->rows(8)
                                            ->helperText('The full article shown on the detail page.'),
                                        ImageUploadField::make('image', 'images/news')
                                            ->label('Article Image'),
                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),
                                        TextInput::make('read_more_url')
                                            ->label('Read More URL')
                                            ->helperText('Route name or URL'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(6),
                            ]),

                        Tab::make('Sidebar')
                            ->schema([
                                Repeater::make('content_data.recent_posts')
                                    ->label('Recent Posts')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Post Title')
                                            ->required(),
                                        TextInput::make('date')
                                            ->label('Date')
                                            ->placeholder('08 January 2020'),
                                        ImageUploadField::make('image', 'images/news')
                                            ->label('Post Image'),
                                        TextInput::make('link')
                                            ->label('Post Link')
                                            ->helperText('Route name or URL'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(3),

                                Repeater::make('content_data.categories')
                                    ->label('Categories')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Category Name')
                                            ->required(),
                                        TextInput::make('count')
                                            ->label('Article Count')
                                            ->numeric()
                                            ->default(0),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->defaultItems(5),

                                Repeater::make('content_data.tags')
                                    ->label('Tags')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Tag Name')
                                            ->required(),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->defaultItems(7),
                            ]),

                        Tab::make('CTA Strip')
                            ->schema([
                                TextInput::make('content_data.cta_title')
                                    ->label('CTA Heading'),
                                Textarea::make('content_data.cta_text')
                                    ->label('CTA Description')
                                    ->rows(3),
                                TextInput::make('content_data.cta_button_1_text')
                                    ->label('Primary Button Text'),
                                TextInput::make('content_data.cta_button_1_url')
                                    ->label('Primary Button URL')
                                    ->helperText('Route name or URL'),
                                TextInput::make('content_data.cta_button_2_text')
                                    ->label('Secondary Button Text'),
                                TextInput::make('content_data.cta_button_2_url')
                                    ->label('Secondary Button URL')
                                    ->helperText('Route name or URL'),
                            ]),
                    ]),
            ]);
    }
}
