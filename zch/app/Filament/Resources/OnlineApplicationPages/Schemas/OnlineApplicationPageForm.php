<?php

namespace App\Filament\Resources\OnlineApplicationPages\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class OnlineApplicationPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255)->unique(ignoreRecord: true),
                Toggle::make('is_published')->default(true),

                Tabs::make('Application Form Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.banner_title')
                                    ->label('Banner Title')
                                    ->default('Online Job Application')
                                    ->required(),
                                TextInput::make('content_data.breadcrumb')
                                    ->label('Breadcrumb Text')
                                    ->default('Online Job Application'),
                            ]),

                        Tab::make('Card Header')
                            ->schema([
                                TextInput::make('content_data.card_title')
                                    ->label('Card Title')
                                    ->default('Zomba Central Hospital'),
                                TextInput::make('content_data.card_subtitle')
                                    ->label('Card Subtitle')
                                    ->default('Online Job Application Form'),
                            ]),

                        Tab::make('Form Sections')
                            ->schema([
                                TextInput::make('content_data.section_personal')
                                    ->label('Personal Information Title')
                                    ->default('Personal Information'),
                                TextInput::make('content_data.section_position')
                                    ->label('Position Applying For Title')
                                    ->default('Position Applying For'),
                                TextInput::make('content_data.section_education')
                                    ->label('Education & Qualifications Title')
                                    ->default('Education & Qualifications'),
                                TextInput::make('content_data.section_documents')
                                    ->label('Upload Supporting Documents Title')
                                    ->default('Upload Supporting Documents'),
                                TextInput::make('content_data.section_declaration')
                                    ->label('Declaration Title')
                                    ->default('Declaration'),
                            ]),

                        Tab::make('Department Options')
                            ->schema([
                                KeyValue::make('content_data.departments')
                                    ->label('Department Options')
                                    ->helperText('Key-value pairs. Keys are internal, values are display labels.')
                                    ->default([
                                        'Administration' => 'Administration',
                                        'Nursing' => 'Nursing',
                                        'Human Resources' => 'Human Resources',
                                        'Finance' => 'Finance',
                                        'Laboratory' => 'Laboratory',
                                        'Pharmacy' => 'Pharmacy',
                                        'Clinical Services' => 'Clinical Services',
                                        'ICT Department' => 'ICT Department',
                                    ]),
                            ]),

                        Tab::make('Employment Types')
                            ->schema([
                                KeyValue::make('content_data.employment_types')
                                    ->label('Employment Type Options')
                                    ->default([
                                        'Full-Time' => 'Full-Time',
                                        'Part-Time' => 'Part-Time',
                                        'Contract' => 'Contract',
                                        'Internship' => 'Internship',
                                    ]),
                            ]),

                        Tab::make('Gender Options')
                            ->schema([
                                KeyValue::make('content_data.genders')
                                    ->label('Gender Options')
                                    ->default([
                                        'Male' => 'Male',
                                        'Female' => 'Female',
                                    ]),
                            ]),

                        Tab::make('Declaration & Footer')
                            ->schema([
                                Textarea::make('content_data.declaration_text')
                                    ->label('Declaration Text')
                                    ->default('I confirm that the information provided in this application form is accurate and complete to the best of my knowledge.')
                                    ->rows(3),
                                TextInput::make('content_data.submit_button_text')
                                    ->label('Submit Button Text')
                                    ->default('Submit Application'),
                                Textarea::make('content_data.footer_note')
                                    ->label('Footer Note')
                                    ->default('© 2026 Zomba Central Hospital. All Rights Reserved.')
                                    ->rows(2),
                            ]),
                    ]),
            ]);
    }
}
