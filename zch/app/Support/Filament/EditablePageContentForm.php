<?php

namespace App\Support\Filament;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EditablePageContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                Toggle::make('is_published')
                    ->label('Published')
                    ->default(true),

                RichEditor::make('content_html')
                    ->label('Page content')
                    ->helperText('Type or paste normal content here. No code is needed.')
                    ->toolbarButtons([
                        'h2',
                        'h3',
                        'bold',
                        'italic',
                        'bulletList',
                        'orderedList',
                        'link',
                        'undo',
                        'redo',
                    ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
