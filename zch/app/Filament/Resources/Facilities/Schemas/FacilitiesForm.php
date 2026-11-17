<?php

namespace App\Filament\Resources\Facilities\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class FacilitiesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255)->unique(ignoreRecord: true),
                Toggle::make('is_published')->default(true),
                Tabs::make('Facilities Content')
                    ->tabs([
                        Tab::make('Hero')
                            ->schema([
                                TextInput::make('content_data.eyebrow'),
                                TextInput::make('content_data.hero_heading'),
                                Textarea::make('content_data.hero_text')->rows(3),
                                TextInput::make('content_data.panel_heading'),
                                Textarea::make('content_data.panel_text')->rows(3),
                                Repeater::make('content_data.checklist')
                                    ->simple(TextInput::make('item')->required())
                                    ->defaultItems(3)
                                    ->collapsible(),
                            ]),
                        Tab::make('Highlights')
                            ->schema([
                                Repeater::make('content_data.highlights')
                                    ->schema([
                                        TextInput::make('value')->required(),
                                        TextInput::make('label')->required(),
                                    ])
                                    ->columns(2)
                                    ->defaultItems(3)
                                    ->collapsible(),
                                TextInput::make('content_data.section_heading'),
                                Textarea::make('content_data.section_intro')->rows(3),
                            ]),
                        Tab::make('Cards')
                            ->schema([
                                Repeater::make('content_data.facilities')
                                    ->schema([
                                        TextInput::make('title')->required(),
                                        TextInput::make('tag')->required(),
                                        TextInput::make('icon')->required(),
                                        ImageUploadField::make('image', 'images/facilities'),
                                        Textarea::make('description')->rows(3)->required(),
                                    ])
                                    ->columns(2)
                                    ->defaultItems(6)
                                    ->collapsible(),
                            ]),
                        Tab::make('Summary')
                            ->schema([
                                TextInput::make('content_data.summary_heading'),
                                Textarea::make('content_data.summary_text')->rows(3),
                                TextInput::make('content_data.summary_button_text'),
                                TextInput::make('content_data.summary_button_url'),
                            ]),
                    ]),
            ]);
    }
}
