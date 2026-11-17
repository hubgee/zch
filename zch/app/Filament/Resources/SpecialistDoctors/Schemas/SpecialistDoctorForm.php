<?php

namespace App\Filament\Resources\SpecialistDoctors\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class SpecialistDoctorForm
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

                Tabs::make('Doctors Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.page_heading_label')
                                    ->label('Heading Label')
                                    ->default('Our Expert')
                                    ->helperText('First part of heading'),
                                TextInput::make('content_data.page_heading_highlight')
                                    ->label('Heading Highlight')
                                    ->default('Doctors')
                                    ->helperText('Second part of heading (styled differently)'),
                                Textarea::make('content_data.page_description')
                                    ->label('Page Description')
                                    ->rows(3)
                                    ->default('Meet our experienced medical professionals dedicated to quality patient care.'),
                            ]),

                        Tab::make('Doctor Cards')
                            ->schema([
                                Repeater::make('content_data.doctors')
                                    ->label('Doctor Cards')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Doctor Name')
                                            ->required(),
                                        TextInput::make('specialty')
                                            ->label('Specialty')
                                            ->required(),
                                        ImageUploadField::make('image', 'images/team')
                                            ->label('Doctor Photo'),
                                        TextInput::make('alt')
                                            ->label('Image Alt Text'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->defaultItems(9),
                            ]),

                        Tab::make('CTA Strip')
                            ->schema([
                                TextInput::make('content_data.cta_title')
                                    ->label('CTA Heading')
                                    ->default('Dedicated to Your Health & Well-being'),
                                Textarea::make('content_data.cta_text')
                                    ->label('CTA Description')
                                    ->rows(3)
                                    ->default('Our doors are always open for those in need of compassionate and professional healthcare. Join us in our mission to build a healthier community.'),
                                TextInput::make('content_data.cta_button_1_text')
                                    ->label('Primary Button Text')
                                    ->default('Get in Touch'),
                                TextInput::make('content_data.cta_button_1_url')
                                    ->label('Primary Button URL')
                                    ->helperText('Route name or URL')
                                    ->default('frontend.contact'),
                                TextInput::make('content_data.cta_button_2_text')
                                    ->label('Secondary Button Text')
                                    ->default('Our Services'),
                                TextInput::make('content_data.cta_button_2_url')
                                    ->label('Secondary Button URL')
                                    ->helperText('Route name or URL')
                                    ->default('frontend.services'),
                            ]),
                    ]),
            ]);
    }
}
