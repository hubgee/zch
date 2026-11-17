<?php

namespace App\Filament\Resources\HomePages\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class HomePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->default('Home Page'),

                Tabs::make('Home Page Sections')
                    ->tabs([
                        Tab::make('Hero Slider')
                            ->schema([
                                Repeater::make('sliders')
                                    ->label('Slides')
                                    ->schema([
                                        TextInput::make('title')->required(),
                                        Textarea::make('subtitle')->rows(2),
                                        TextInput::make('button_text'),
                                        TextInput::make('button_url')
                                            ->label('Button link')
                                            ->helperText('Route name (e.g. frontend.about) or full URL'),
                                        ImageUploadField::make('background_image', 'images/slider'),
                                        TextInput::make('css_class')
                                            ->label('CSS class'),
                                        Toggle::make('is_active')
                                            ->default(true),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(3),
                            ]),

                        Tab::make('Top CTA Cards')
                            ->schema([
                                Repeater::make('cta_blocks')
                                    ->label('CTA cards')
                                    ->schema([
                                        Select::make('type')
                                            ->options([
                                                'emergency' => 'Emergency',
                                                'departments' => 'Departments',
                                                'hours' => 'Clinic hours',
                                            ])
                                            ->required()
                                            ->live(),
                                        TextInput::make('icon')
                                            ->placeholder('fa fa-phone'),
                                        TextInput::make('title')->required(),
                                        TextInput::make('phone')
                                            ->visible(fn (Get $get): bool => $get('type') === 'emergency'),
                                        TextInput::make('phone_link')
                                            ->label('Phone link')
                                            ->placeholder('tel:+265999')
                                            ->visible(fn (Get $get): bool => $get('type') === 'emergency'),
                                        Textarea::make('body')
                                            ->rows(2)
                                            ->visible(fn (Get $get): bool => in_array($get('type'), ['emergency', 'departments'])),
                                        TextInput::make('button_text')
                                            ->visible(fn (Get $get): bool => $get('type') === 'departments'),
                                        TextInput::make('button_url')
                                            ->visible(fn (Get $get): bool => $get('type') === 'departments'),
                                        Repeater::make('hours')
                                            ->schema([
                                                TextInput::make('label')->required(),
                                                TextInput::make('time')->required(),
                                            ])
                                            ->columns(2)
                                            ->visible(fn (Get $get): bool => $get('type') === 'hours'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(3),
                            ]),

                        Tab::make('About / History')
                            ->schema([
                                TextInput::make('about_title')->required(),
                                TextInput::make('about_subtitle'),
                                Textarea::make('about_paragraph_1')->rows(3),
                                Textarea::make('about_paragraph_2')->rows(3),
                                ImageUploadField::make('about_image', 'images/about'),
                                TextInput::make('about_button_url')
                                    ->label('Read more button link'),
                                Repeater::make('stats')
                                    ->label('Statistics')
                                    ->schema([
                                        TextInput::make('icon')->placeholder('fas fa-calendar-alt'),
                                        TextInput::make('value')->required(),
                                        TextInput::make('label')->required(),
                                    ])
                                    ->columns(3)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                                    ->defaultItems(4),
                            ]),

                        Tab::make('Leadership')
                            ->schema([
                                TextInput::make('leadership_title'),
                                TextInput::make('leadership_highlight')
                                    ->label('Highlighted word'),
                                Textarea::make('leadership_intro')->rows(4),
                                Repeater::make('leaders')
                                    ->label('Leadership profiles')
                                    ->schema([
                                        TextInput::make('tab_id')
                                            ->label('Tab ID')
                                            ->required(),
                                        TextInput::make('tab_label')
                                            ->label('Tab label')
                                            ->required(),
                                        TextInput::make('name')->required(),
                                        ImageUploadField::make('image', 'images/services'),
                                        Repeater::make('paragraphs')
                                            ->simple(
                                                Textarea::make('paragraph')
                                                    ->required()
                                                    ->rows(3),
                                            )
                                            ->defaultItems(2)
                                            ->collapsible(),
                                        Repeater::make('bullet_points')
                                            ->simple(
                                                TextInput::make('point')
                                                    ->required(),
                                            )
                                            ->defaultItems(3)
                                            ->collapsible(),
                                        TextInput::make('button_text'),
                                        TextInput::make('button_url'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->defaultItems(3),
                            ]),

                        Tab::make('Latest News')
                            ->schema([
                                TextInput::make('news_title'),
                                TextInput::make('news_highlight')
                                    ->label('Highlighted word'),
                                Textarea::make('news_intro')->rows(3),
                                Repeater::make('news_items')
                                    ->label('News cards')
                                    ->schema([
                                        Select::make('type')
                                            ->options([
                                                'news' => 'News article',
                                                'facebook' => 'Facebook embed',
                                            ])
                                            ->required()
                                            ->live(),
                                        TextInput::make('category'),
                                        TextInput::make('title')->required(),
                                        Textarea::make('excerpt')->rows(2),
                                        ImageUploadField::make('image', 'images/blog')
                                            ->visible(fn (Get $get): bool => $get('type') === 'news'),
                                        TextInput::make('article_slug')
                                            ->label('News Article Slug')
                                            ->helperText('Optional slug of the full article.')
                                            ->visible(fn (Get $get): bool => $get('type') === 'news'),
                                        TextInput::make('url')
                                            ->label('Link URL'),
                                        TextInput::make('facebook_title')
                                            ->visible(fn (Get $get): bool => $get('type') === 'facebook'),
                                        TextInput::make('facebook_embed_url')
                                            ->label('Facebook embed URL')
                                            ->visible(fn (Get $get): bool => $get('type') === 'facebook'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(3),
                            ]),

                        Tab::make('Partners')
                            ->schema([
                                TextInput::make('partners_title'),
                                TextInput::make('partners_subtitle'),
                                Repeater::make('partners')
                                    ->schema([
                                        TextInput::make('name')->required(),
                                        ImageUploadField::make('logo', 'images/partners'),
                                        TextInput::make('url')
                                            ->label('Website URL'),
                                    ])
                                    ->columns(3)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->defaultItems(6),
                            ]),

                        Tab::make('Bottom CTA')
                            ->schema([
                                TextInput::make('bottom_cta_title'),
                                Textarea::make('bottom_cta_text')->rows(3),
                                TextInput::make('bottom_cta_button_1_text'),
                                TextInput::make('bottom_cta_button_1_url'),
                                TextInput::make('bottom_cta_button_2_text'),
                                TextInput::make('bottom_cta_button_2_url'),
                                ImageUploadField::make('bottom_cta_background_image', 'images/background')
                                    ->label('Background image'),
                            ])
                            ->columns(2),
                    ]),
            ]);
    }
}
