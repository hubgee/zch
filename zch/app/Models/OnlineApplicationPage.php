<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class OnlineApplicationPage extends Model
{
    use HasEditablePageContent;

    protected $table = 'online_application_pages';
}
