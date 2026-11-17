<?php

namespace App\Filament\Resources\TestimonialPages\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class TestimonialPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Testimonial Page Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.eyebrow_label')
                                    ->default('genuine voices'),
                                TextInput::make('content_data.page_heading')
                                    ->default('Patient Testimonials'),
                                Textarea::make('content_data.page_description')
                                    ->rows(3)
                                    ->default('Read the inspiring stories of care, recovery, and compassion from our patients and their families.'),
                            ]),
                        Tab::make('Testimonials')
                            ->schema([
                                Repeater::make('content_data.testimonials')
                                    ->schema([
                                        TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('initials')
                                            ->maxLength(255)
                                            ->placeholder('e.g. EB'),
                                        TextInput::make('tag')
                                            ->maxLength(255)
                                            ->placeholder('e.g. Maternity & Childbirth'),
                                        TextInput::make('date')
                                            ->maxLength(255)
                                            ->placeholder('e.g. March 2025'),
                                        Textarea::make('text')
                                            ->rows(3)
                                            ->required(),
                                        TextInput::make('rating')
                                            ->numeric()
                                            ->minValue(1)
                                            ->maxValue(5)
                                            ->default(5),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->defaultItems(6),
                            ]),
                        Tab::make('Bottom Note')
                            ->schema([
                                Textarea::make('content_data.note_text')
                                    ->rows(3)
                                    ->default('Zomba Central Hospital, your health, our commitment. #HealingWithDignity'),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
