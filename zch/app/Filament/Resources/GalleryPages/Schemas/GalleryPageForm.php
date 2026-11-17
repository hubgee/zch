<?php

namespace App\Filament\Resources\GalleryPages\Schemas;

use App\Support\Filament\ImageUploadField;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class GalleryPageForm
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

                Tabs::make('Gallery Content')
                    ->tabs([
                        Tab::make('Page Header')
                            ->schema([
                                TextInput::make('content_data.eyebrow_label')
                                    ->label('Eyebrow Label')
                                    ->default('Our Gallery')
                                    ->helperText('Small label above heading, e.g. "Our Gallery"'),
                                TextInput::make('content_data.page_heading')
                                    ->label('Page Heading')
                                    ->default('Photo & Video Gallery')
                                    ->helperText('Main heading for the gallery page'),
                                Textarea::make('content_data.page_description')
                                    ->label('Page Description')
                                    ->rows(3),
                            ]),

                        Tab::make('Photos')
                            ->schema([
                                Repeater::make('content_data.photos')
                                    ->label('Photos')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Photo Title')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2),
                                        ImageUploadField::make('image', 'images/gallery')
                                            ->label('Thumbnail Image'),
                                        ImageUploadField::make('full_image', 'images/gallery')
                                            ->label('Full Size Image'),
                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(6),
                            ]),

                        Tab::make('Videos')
                            ->schema([
                                Repeater::make('content_data.videos')
                                    ->label('Videos')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Video Title')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2),
                                        TextInput::make('type')
                                            ->label('Video Type')
                                            ->placeholder('Hospital Update')
                                            ->helperText('e.g. "Hospital Update", "Patient Story"'),
                                        TextInput::make('embed_url')
                                            ->label('Embed URL')
                                            ->placeholder('https://www.youtube.com/embed/...')
                                            ->helperText('YouTube or Vimeo embed URL'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(4),
                            ]),

                        Tab::make('Audio Clips')
                            ->schema([
                                Repeater::make('content_data.audio')
                                    ->label('Audio Clips')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Audio Title')
                                            ->required(),
                                        TextInput::make('author')
                                            ->label('Author')
                                            ->placeholder('Grace M.'),
                                        TextInput::make('duration')
                                            ->label('Duration')
                                            ->placeholder('2:15 min')
                                            ->helperText('Audio length, e.g. "2:15 min"'),
                                        TextInput::make('category')
                                            ->label('Category')
                                            ->placeholder('Patient Voices')
                                            ->helperText('e.g. "Patient Voices", "Medical Tips"'),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2),
                                        TextInput::make('audio_url')
                                            ->label('Audio URL')
                                            ->helperText('URL to mp3 file'),
                                        TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fas fa-microphone-alt')
                                            ->helperText('Font Awesome class, e.g. fas fa-microphone-alt'),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->defaultItems(6),
                            ]),

                        Tab::make('CTA')
                            ->schema([
                                TextInput::make('content_data.cta_title')
                                    ->label('CTA Title')
                                    ->default('Share Your Story'),
                                Textarea::make('content_data.cta_text')
                                    ->label('CTA Text')
                                    ->rows(3),
                                TextInput::make('content_data.cta_button_1_text')
                                    ->label('Button 1 Text')
                                    ->default('Submit Content'),
                                TextInput::make('content_data.cta_button_1_url')
                                    ->label('Button 1 URL')
                                    ->helperText('Route name or URL'),
                                TextInput::make('content_data.cta_button_2_text')
                                    ->label('Button 2 Text')
                                    ->default('Contact Us'),
                                TextInput::make('content_data.cta_button_2_url')
                                    ->label('Button 2 URL')
                                    ->helperText('Route name or URL'),
                            ]),
                    ]),
            ]);
    }
}
