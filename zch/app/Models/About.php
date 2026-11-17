<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasEditablePageContent;
}
