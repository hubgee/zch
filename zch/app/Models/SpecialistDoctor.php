<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class SpecialistDoctor extends Model
{
    use HasEditablePageContent;

    protected $table = 'specialist_doctors';
}
