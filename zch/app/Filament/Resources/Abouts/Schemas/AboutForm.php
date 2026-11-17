<?php

namespace App\Filament\Resources\Abouts\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class AboutForm
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
                Tabs::make('About Content')
                    ->tabs([
                        Tab::make('History')
                            ->schema([
                                TextInput::make('content_data.history_heading')->required(),
                                TextInput::make('content_data.history_tagline'),
                                Textarea::make('content_data.history_paragraph_1')->rows(4),
                                Textarea::make('content_data.history_paragraph_2')->rows(4),
                                TextInput::make('content_data.history_highlight_title'),
                                Textarea::make('content_data.history_highlight_text')->rows(3),
                                ImageUploadField::make('content_data.history_image', 'images/about')
                                    ->label('History image'),
                                TextInput::make('content_data.history_image_alt'),
                                TextInput::make('content_data.history_caption'),
                            ]),
                        Tab::make('Compass')
                            ->schema([
                                TextInput::make('content_data.compass_heading')->required(),
                                Repeater::make('content_data.compass_items')
                                    ->schema([
                                        TextInput::make('icon')->required(),
                                        TextInput::make('title')->required(),
                                        Textarea::make('body')->rows(3)->required(),
                                    ])
                                    ->columns(2)
                                    ->defaultItems(3)
                                    ->collapsible(),
                            ]),
                        Tab::make('Values')
                            ->schema([
                                TextInput::make('content_data.values_heading'),
                                TextInput::make('content_data.values_intro'),
                                Repeater::make('content_data.values')
                                    ->simple(
                                        TextInput::make('value')->required()
                                    )
                                    ->defaultItems(6)
                                    ->collapsible(),
                            ]),
                        Tab::make('Training')
                            ->schema([
                                ImageUploadField::make('content_data.training_image', 'images/services')
                                    ->label('Training image'),
                                TextInput::make('content_data.training_image_alt'),
                                TextInput::make('content_data.training_caption'),
                                TextInput::make('content_data.training_heading'),
                                Textarea::make('content_data.training_paragraph_1')->rows(4),
                                Textarea::make('content_data.training_paragraph_2')->rows(4),
                            ]),
                        Tab::make('Milestones')
                            ->schema([
                                TextInput::make('content_data.milestones_heading'),
                                Repeater::make('content_data.milestones')
                                    ->schema([
                                        TextInput::make('year')->required(),
                                        TextInput::make('icon')->required(),
                                        TextInput::make('title')->required(),
                                        Textarea::make('description')->rows(3)->required(),
                                    ])
                                    ->columns(2)
                                    ->defaultItems(4)
                                    ->collapsible(),
                            ]),
                        Tab::make('CTA')
                            ->schema([
                                TextInput::make('content_data.cta_title'),
                                Textarea::make('content_data.cta_text')->rows(3),
                                TextInput::make('content_data.cta_button_1_text'),
                                TextInput::make('content_data.cta_button_1_url'),
                                TextInput::make('content_data.cta_button_2_text'),
                                TextInput::make('content_data.cta_button_2_url'),
                            ])
                            ->columns(2),
                    ]),
            ]);
    }
}
