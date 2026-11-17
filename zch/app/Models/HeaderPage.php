<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class HeaderPage extends Model
{
    use HasEditablePageContent;

    protected $table = 'header_pages';
}
