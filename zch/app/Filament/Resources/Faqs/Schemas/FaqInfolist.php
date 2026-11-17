<?php

namespace App\Filament\Resources\Faqs\Schemas;

use App\Support\Filament\EditablePageContentInfolist;
use Filament\Schemas\Schema;

class FaqInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return EditablePageContentInfolist::configure($schema);
    }
}
