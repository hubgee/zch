<?php

namespace App\Models;

use App\Models\Concerns\HasEditablePageContent;
use Illuminate\Database\Eloquent\Model;

class TestimonialPage extends Model
{
    use HasEditablePageContent;

    protected $table = 'testimonial_pages';
}
