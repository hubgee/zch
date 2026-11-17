<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class FooterPage extends Model
{
    use HasEditablePageContent;

    protected $table = 'footer_pages';
}
