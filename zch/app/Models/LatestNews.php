<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    use HasEditablePageContent;

    protected $table = 'latest_news';
}
