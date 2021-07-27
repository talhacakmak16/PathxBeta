<?php

namespace App\Models;

use App\Enums\GenderType;
use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticate
{
    protected $fillable = [
      'name', 'date', 'email', 'password'
    ];

    protected $hidden = [
        'password'
        ];

    protected $casts = [
        'gender' => GenderType::class
    ];
}
