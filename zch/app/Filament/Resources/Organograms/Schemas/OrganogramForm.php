<?php

namespace App\Filament\Resources\Organograms\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class OrganogramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255)->unique(ignoreRecord: true),
                Toggle::make('is_published')->default(true),
                TextInput::make('content_data.heading')->required(),
                TextInput::make('content_data.intro'),
                ImageUploadField::make('content_data.chart_image', 'images/gallery')
                    ->label('Organogram image'),
                TextInput::make('content_data.chart_alt'),
                TextInput::make('content_data.cta_title'),
                Textarea::make('content_data.cta_text')->rows(3),
                TextInput::make('content_data.cta_button_1_text'),
                TextInput::make('content_data.cta_button_1_url'),
                TextInput::make('content_data.cta_button_2_text'),
                TextInput::make('content_data.cta_button_2_url'),
            ]);
    }
}
