<?php

namespace App\Filament\Resources\CareerPages\Schemas;

use App\Support\Filament\EditablePageContentInfolist;
use Filament\Schemas\Schema;

class CareerPageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return EditablePageContentInfolist::configure($schema);
    }
}
