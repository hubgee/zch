<?php

namespace App\Filament\Resources\OnlineApplicationPages\Schemas;

use App\Support\Filament\EditablePageContentInfolist;
use Filament\Schemas\Schema;

class OnlineApplicationPageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return EditablePageContentInfolist::configure($schema);
    }
}
