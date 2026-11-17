<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class GalleryPage extends Model
{
    use HasEditablePageContent;

    protected $table = 'gallery_pages';
}
