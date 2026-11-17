<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\User;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('avatar')
                    ->label('Profile Photo')
                    ->disk('public_assets')
                    ->visibility('public')
                    ->circular()
                    ->defaultImageUrl(url('images/avatars/default.png')),
                TextEntry::make('name')
                    ->label('Full Name')
                    ->weight('bold'),
                TextEntry::make('email')
                    ->label('Email Address'),
                TextEntry::make('role')
                    ->label('Role')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => User::ROLES[$state] ?? $state)
                    ->color(fn (string $state): string => match ($state) {
                        User::ROLE_SUPER_ADMIN => 'danger',
                        User::ROLE_ADMIN => 'warning',
                        User::ROLE_EDITOR => 'info',
                        User::ROLE_VIEWER => 'gray',
                        default => 'gray',
                    }),
                IconEntry::make('is_active')
                    ->label('Status')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
            ]);
    }
}
