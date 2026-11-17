<?php

namespace App\Filament\Resources\HeaderPages\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class HeaderPageForm
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
                    ->default('main-header'),
                Toggle::make('is_published')->default(true),

                Tabs::make('Header Content')
                    ->tabs([
                        Tab::make('Top Bar')
                            ->schema([
                                TextInput::make('content_data.top_bar.emergency_text')
                                    ->label('Emergency Text')
                                    ->default('24/7 Emergency Services Available')
                                    ->required(),
                                TextInput::make('content_data.top_bar.emergency_label')
                                    ->label('Emergency Label')
                                    ->default('Emergency'),
                                TextInput::make('content_data.top_bar.emergency_phone')
                                    ->label('Emergency Phone')
                                    ->default('999'),
                                TextInput::make('content_data.top_bar.toll_free_label')
                                    ->label('Toll Free Label')
                                    ->default('Toll Free'),
                                TextInput::make('content_data.top_bar.toll_free_phone')
                                    ->label('Toll Free Phone')
                                    ->default('+265 (0) 887 682 856'),
                            ]),

                        Tab::make('Contact Info')
                            ->schema([
                                TextInput::make('content_data.contact.email')
                                    ->label('Email Address')
                                    ->email()
                                    ->default('zch@zomba.mw')
                                    ->required(),
                                TextInput::make('content_data.contact.email_label')
                                    ->label('Email Label')
                                    ->default('Email'),
                                TextInput::make('content_data.contact.phone')
                                    ->label('Phone Number')
                                    ->default('+265 (0) 887 682 856')
                                    ->required(),
                                TextInput::make('content_data.contact.phone_label')
                                    ->label('Phone Label')
                                    ->default('Call Now'),
                                TextInput::make('content_data.contact.appointment_text')
                                    ->label('Appointment Button Text')
                                    ->default('Appointment'),
                                TextInput::make('content_data.contact.appointment_url')
                                    ->label('Appointment Button URL')
                                    ->default('/appointment'),
                            ]),

                        Tab::make('Logo')
                            ->schema([
                                ImageUploadField::make('content_data.logo.image', 'images')
                                    ->label('Logo Image'),
                                TextInput::make('content_data.logo.alt')
                                    ->label('Logo Alt Text')
                                    ->default('Zomba Central Hospital'),
                            ]),

                        Tab::make('Navigation')
                            ->schema([
                                TextInput::make('content_data.search_placeholder')
                                    ->label('Search Placeholder')
                                    ->default('Search...'),
                                Repeater::make('content_data.nav_items')
                                    ->label('Navigation Items')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label')
                                            ->required(),
                                        TextInput::make('url')
                                            ->label('URL')
                                            ->helperText('Use # for dropdowns with no link'),
                                        Toggle::make('open_new_tab')
                                            ->label('Open in New Tab')
                                            ->default(false),
                                        Repeater::make('children')
                                            ->label('Dropdown Items')
                                            ->schema([
                                                TextInput::make('label')
                                                    ->label('Label')
                                                    ->required(),
                                                TextInput::make('url')
                                                    ->label('URL'),
                                                Toggle::make('open_new_tab')
                                                    ->label('Open in New Tab')
                                                    ->default(false),
                                                Repeater::make('children')
                                                    ->label('Sub-Menu Items')
                                                    ->schema([
                                                        TextInput::make('label')
                                                            ->label('Label')
                                                            ->required(),
                                                        TextInput::make('url')
                                                            ->label('URL'),
                                                    ])
                                                    ->collapsible()
                                                    ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                                                    ->defaultItems(0),
                                            ])
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                                            ->defaultItems(0),
                                    ])
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                                    ->defaultItems(0),
                            ]),
                    ]),
            ]);
    }
}
