<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketModel extends Model
{
    protected $fillable = ['id','name','price','image','adet'];

}
