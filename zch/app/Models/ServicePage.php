<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    use HasEditablePageContent;

    protected $table = 'service_pages';
}
