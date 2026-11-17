<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class EventsPage extends Model
{
    use HasEditablePageContent;

    protected $table = 'events_pages';
}
