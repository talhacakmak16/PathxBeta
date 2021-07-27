<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $guarded = [];
    static function getField($id,$field)
    {
       $c = Teams::where('id','=',$id)->count();
       if ($c !=0)
       {
           $w = Teams::where('id','=',$id)->get();
           return $w[0][$field];
       }
       else
       {
           echo "Silinmiş Takım";
       }
    }
}
