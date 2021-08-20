<?php

namespace App\Models;

use Database\Factories\TeamJerseyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories;
class TeamJerseys extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function newFactory ()
    {
        return TeamJerseyFactory::new();
    }
}
