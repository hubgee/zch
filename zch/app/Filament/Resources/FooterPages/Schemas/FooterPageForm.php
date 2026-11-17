<?php

namespace App\Filament\Resources\FooterPages\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class FooterPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->default('main-footer'),
                Toggle::make('is_published')->default(true),

                Tabs::make('Footer Content')
                    ->tabs([
                        Tab::make('About Widget')
                            ->schema([
                                ImageUploadField::make('content_data.about.logo', 'images')
                                    ->label('Logo Image'),
                                TextInput::make('content_data.about.logo_alt')
                                    ->label('Logo Alt Text')
                                    ->default('medic'),
                                Textarea::make('content_data.about.description')
                                    ->label('About Description')
                                    ->rows(3)
                                    ->default('Leading the way in medical excellence. Trusted by the community for over 50 years. We are committed to providing quality healthcare services to all.'),
                                Repeater::make('content_data.about.contact_items')
                                    ->label('Contact Items')
                                    ->schema([
                                        TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fas fa-map-marker-alt'),
                                        Textarea::make('text')
                                            ->label('Text')
                                            ->rows(2),
                                        TextInput::make('href')
                                            ->label('Link (optional)')
                                            ->placeholder('mailto:zch@zomba.mw'),
                                    ])
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['text'] ?? null)
                                    ->defaultItems(0),
                                Repeater::make('content_data.about.social_links')
                                    ->label('Social Links')
                                    ->schema([
                                        TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fab fa-facebook-f'),
                                        TextInput::make('url')
                                            ->label('URL')
                                            ->required(),
                                        TextInput::make('label')
                                            ->label('Label')
                                            ->placeholder('facebook'),
                                    ])
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                                    ->defaultItems(0),
                            ]),

                        Tab::make('Quick Links')
                            ->schema([
                                TextInput::make('content_data.quick_links.title')
                                    ->label('Section Title')
                                    ->default('Quick Links'),
                                TextInput::make('content_data.quick_links.icon')
                                    ->label('Section Icon Class')
                                    ->default('fas fa-link'),
                                Repeater::make('content_data.quick_links.items')
                                    ->label('Links')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label')
                                            ->required(),
                                        TextInput::make('url')
                                            ->label('URL')
                                            ->required(),
                                    ])
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                                    ->defaultItems(0),
                            ]),

                        Tab::make('Ombudsman')
                            ->schema([
                                TextInput::make('content_data.ombudsman.title')
                                    ->label('Section Title')
                                    ->default('Ombudsman'),
                                TextInput::make('content_data.ombudsman.icon')
                                    ->label('Section Icon Class')
                                    ->default('fas fa-headset'),
                                Textarea::make('content_data.ombudsman.description')
                                    ->label('Description')
                                    ->rows(3)
                                    ->default('If not satisfied with the service, contact our ombudsman for help, complaints, or follow-up on service delivery concerns.'),
                                Repeater::make('content_data.ombudsman.contact_items')
                                    ->label('Contact Items')
                                    ->schema([
                                        TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fas fa-phone-volume'),
                                        TextInput::make('text')
                                            ->label('Text')
                                            ->required(),
                                    ])
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['text'] ?? null)
                                    ->defaultItems(0),
                            ]),

                        Tab::make('Visitor Counter')
                            ->schema([
                                TextInput::make('content_data.visitor_counter.title')
                                    ->label('Section Title')
                                    ->default('Visitor Counter'),
                                TextInput::make('content_data.visitor_counter.icon')
                                    ->label('Section Icon Class')
                                    ->default('fas fa-users'),
                                TextInput::make('content_data.visitor_counter.word')
                                    ->label('Word Label')
                                    ->default('Visitors'),
                                Textarea::make('content_data.visitor_counter.note')
                                    ->label('Note Text')
                                    ->rows(2)
                                    ->default('Counts are stored in this browser and styled to match your reference card.'),
                            ]),

                        Tab::make('Footer Bottom')
                            ->schema([
                                Textarea::make('content_data.bottom.copyright')
                                    ->label('Copyright Text')
                                    ->rows(2)
                                    ->default('&copy; Copyright 2026. Designed &amp; Developed by <a href="https://themefisher.com/">Dep. of E-Government</a>')
                                    ->helperText('HTML allowed for links'),
                                Repeater::make('content_data.bottom.links')
                                    ->label('Footer Bottom Links')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label')
                                            ->required(),
                                        TextInput::make('url')
                                            ->label('URL')
                                            ->required(),
                                    ])
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                                    ->defaultItems(0),
                            ]),
                    ]),
            ]);
    }
}
