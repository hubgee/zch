<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasEditablePageContent;
}
