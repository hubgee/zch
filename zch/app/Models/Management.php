<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasEditablePageContent;

    protected $table = 'management';
}
