<?php

namespace App\Filament\Resources\ServicePages\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ServicePageForm
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

                Tabs::make('Services Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.page_heading_label')
                                    ->label('Heading Label')
                                    ->default('Our Services')
                                    ->helperText('Small label above heading, e.g. "Our Services"'),
                                TextInput::make('content_data.page_heading_title')
                                    ->label('Heading Title Part 1')
                                    ->default('Excellent')
                                    ->helperText('First part of heading'),
                                TextInput::make('content_data.page_heading_highlight')
                                    ->label('Heading Highlight Part 2')
                                    ->default('Medical Services')
                                    ->helperText('Second part of heading (styled differently)'),
                                Textarea::make('content_data.page_description')
                                    ->label('Page Description')
                                    ->rows(3),
                            ]),

                        Tab::make('Service Cards')
                            ->schema([
                                Repeater::make('content_data.cards')
                                    ->label('Service Cards')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Service Title')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(3)
                                            ->required(),
                                        TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fas fa-briefcase-medical')
                                            ->helperText('Font Awesome class, e.g. fas fa-briefcase-medical'),
                                        ImageUploadField::make('image', 'images/services')
                                            ->label('Card Image'),
                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),
                                        TextInput::make('department_slug')
                                            ->label('Department Slug')
                                            ->placeholder('surgical, emergency, diagnostic, or medical')
                                            ->helperText('Optional department detail page used by the Read More button.'),
                                        TextInput::make('link')
                                            ->label('Read More Link')
                                            ->helperText('Route name or URL'),
                                        TextInput::make('delay')
                                            ->label('Animation Delay')
                                            ->default('0ms'),
                                        TextInput::make('duration')
                                            ->label('Animation Duration')
                                            ->default('1200ms'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(6),
                            ]),

                        Tab::make('CTA Strip')
                            ->schema([
                                TextInput::make('content_data.cta_heading')
                                    ->label('CTA Heading')
                                    ->default('Need Immediate Medical Support?'),
                                Textarea::make('content_data.cta_description')
                                    ->label('CTA Description')
                                    ->rows(2),
                                TextInput::make('content_data.cta_button_text')
                                    ->label('Button Text')
                                    ->default('Book Appointment'),
                                TextInput::make('content_data.cta_button_url')
                                    ->label('Button URL')
                                    ->helperText('Route name or URL'),
                            ]),
                    ]),
            ]);
    }
}
