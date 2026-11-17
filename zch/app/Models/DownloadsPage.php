<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class DownloadsPage extends Model
{
    use HasEditablePageContent;

    protected $table = 'downloads_pages';
}
