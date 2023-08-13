<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Visitor counter
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;

class Settings extends Model implements CanVisit
{
    use HasFactory, HasVisits;
    public $guarded = [];
}
