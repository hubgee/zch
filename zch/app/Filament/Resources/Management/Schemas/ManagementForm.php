<?php

namespace App\Filament\Resources\Management\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ManagementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255)->unique(ignoreRecord: true),
                Toggle::make('is_published')->default(true),
                TextInput::make('content_data.board_heading')->required(),
                TextInput::make('content_data.board_intro'),
                TextInput::make('content_data.lead_name')->required(),
                TextInput::make('content_data.lead_role')->required(),
                TextInput::make('content_data.lead_alt'),
                ImageUploadField::make('content_data.lead_image', 'images/team')->label('Lead image'),
                Repeater::make('content_data.deputies')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('role')->required(),
                        TextInput::make('alt'),
                        ImageUploadField::make('image', 'images/team'),
                    ])
                    ->columns(2)
                    ->defaultItems(2)
                    ->collapsible(),
                TextInput::make('content_data.team_heading')->required(),
                TextInput::make('content_data.team_intro'),
                Repeater::make('content_data.team_members')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('role')->required(),
                        TextInput::make('alt'),
                        ImageUploadField::make('image', 'images/team'),
                    ])
                    ->columns(2)
                    ->defaultItems(6)
                    ->collapsible(),
                TextInput::make('content_data.cta_title'),
                Textarea::make('content_data.cta_text')->rows(3),
                TextInput::make('content_data.cta_button_1_text'),
                TextInput::make('content_data.cta_button_1_url'),
                TextInput::make('content_data.cta_button_2_text'),
                TextInput::make('content_data.cta_button_2_url'),
            ]);
    }
}
