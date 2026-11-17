<?php

namespace App\Filament\Resources\Departments\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class DepartmentForm
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
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                Tabs::make('Department Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.page_title')
                                    ->label('Page Title')
                                    ->required()
                                    ->helperText('Shown in the page title breadcrumb section'),
                                TextInput::make('content_data.sidebar_heading')
                                    ->label('Sidebar Heading')
                                    ->required()
                                    ->helperText('Shown at the top of the sidebar'),
                            ]),

                        Tab::make('Hero')
                            ->schema([
                                TextInput::make('content_data.hero_kicker')
                                    ->label('Hero Kicker')
                                    ->default('Zomba Central Hospital'),
                                TextInput::make('content_data.hero_title')
                                    ->label('Hero Title')
                                    ->required(),
                                Textarea::make('content_data.hero_text')
                                    ->label('Hero Text')
                                    ->rows(3)
                                    ->required(),
                                ImageUploadField::make('content_data.hero_image', 'images/departments')
                                    ->label('Hero Image'),
                                TextInput::make('content_data.hero_alt')
                                    ->label('Hero Image Alt'),
                            ]),

                        Tab::make('Overview Card')
                            ->schema([
                                TextInput::make('content_data.overview_heading')
                                    ->label('Overview Heading')
                                    ->helperText('e.g. "Units Under Surgical Department"'),
                                Textarea::make('content_data.overview_summary')
                                    ->label('Overview Summary')
                                    ->rows(3),
                                Repeater::make('content_data.overview_units')
                                    ->label('Overview Units')
                                    ->simple(TextInput::make('unit')->required())
                                    ->defaultItems(5)
                                    ->collapsible(),
                            ]),

                        Tab::make('FAQs')
                            ->schema([
                                Repeater::make('content_data.faqs')
                                    ->label('FAQ Items')
                                    ->schema([
                                        TextInput::make('question')->required(),
                                        Textarea::make('answer')->rows(3)->required(),
                                    ])
                                    ->columns(1)
                                    ->defaultItems(2)
                                    ->collapsible(),
                            ]),

                        Tab::make('Sub-Units')
                            ->schema([
                                Repeater::make('content_data.sub_units')
                                    ->label('Sub-Units')
                                    ->schema([
                                        TextInput::make('slug')
                                            ->label('URL Slug')
                                            ->required()
                                            ->helperText('e.g. "operating-theatre"'),
                                        TextInput::make('name')
                                            ->label('Sidebar Name')
                                            ->required()
                                            ->helperText('Shown in sidebar navigation'),
                                        TextInput::make('hero_title')
                                            ->label('Hero Title'),
                                        Textarea::make('hero_text')
                                            ->label('Hero Text')
                                            ->rows(2),
                                        ImageUploadField::make('hero_image', 'images/departments')
                                            ->label('Hero Image'),
                                        TextInput::make('hero_alt')
                                            ->label('Hero Image Alt'),
                                        TextInput::make('title')
                                            ->label('Overview Title')
                                            ->helperText('e.g. "Operating Theatre - Overview"'),
                                        Textarea::make('text')
                                            ->label('Overview Text')
                                            ->rows(3),
                                        ImageUploadField::make('image', 'images/departments')
                                            ->label('Content Image'),
                                        TextInput::make('image_alt')
                                            ->label('Content Image Alt'),
                                        Repeater::make('services')
                                            ->label('Core Services')
                                            ->simple(TextInput::make('service')->required())
                                            ->defaultItems(5)
                                            ->collapsible(),
                                        TextInput::make('hours')
                                            ->label('Operating Hours')
                                            ->helperText('HTML allowed, e.g. "Monday - Friday: 8:00 AM - 5:00 PM"'),
                                        TextInput::make('contact')
                                            ->label('Contact Info')
                                            ->helperText('HTML allowed, e.g. "+265 (0) 1 526 266"'),
                                        Textarea::make('summary')
                                            ->label('Summary')
                                            ->rows(3),
                                        TextInput::make('units_title')
                                            ->label('Units Section Title')
                                            ->helperText('e.g. "Units Under Surgical Department"'),
                                        Repeater::make('units')
                                            ->label('Units List')
                                            ->simple(TextInput::make('unit')->required())
                                            ->defaultItems(3)
                                            ->collapsible(),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->defaultItems(1),
                            ]),
                    ]),
            ]);
    }
}
