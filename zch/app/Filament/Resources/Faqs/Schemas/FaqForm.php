<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255)->unique(ignoreRecord: true),
                Toggle::make('is_published')->default(true),
                Tabs::make('FAQ Content')
                    ->tabs([
                        Tab::make('Hero')
                            ->schema([
                                TextInput::make('content_data.eyebrow'),
                                TextInput::make('content_data.hero_heading'),
                                Textarea::make('content_data.hero_text')->rows(3),
                                TextInput::make('content_data.side_heading'),
                                Textarea::make('content_data.side_text')->rows(3),
                                Repeater::make('content_data.side_points')
                                    ->simple(TextInput::make('point')->required())
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
                                TextInput::make('content_data.content_heading'),
                                Textarea::make('content_data.content_intro')->rows(3),
                            ]),
                        Tab::make('Questions')
                            ->schema([
                                Repeater::make('content_data.items')
                                    ->schema([
                                        TextInput::make('question')->required(),
                                        Textarea::make('answer')->rows(3)->required(),
                                    ])
                                    ->defaultItems(6)
                                    ->collapsible(),
                            ]),
                        Tab::make('Support')
                            ->schema([
                                TextInput::make('content_data.support_heading'),
                                Textarea::make('content_data.support_text')->rows(3),
                                TextInput::make('content_data.support_button_text'),
                                TextInput::make('content_data.support_button_url'),
                            ]),
                    ]),
            ]);
    }
}
