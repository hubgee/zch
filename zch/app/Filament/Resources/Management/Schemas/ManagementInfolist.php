<?php

namespace App\Filament\Resources\Management\Schemas;

use App\Support\Filament\EditablePageContentInfolist;
use Filament\Schemas\Schema;

class ManagementInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return EditablePageContentInfolist::configure($schema);
    }
}
