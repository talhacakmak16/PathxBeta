<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    static function getField($id,$field)
    {
        $c = Category::query()->where('id','=',$id)->count();
        if($c!=0)
        {
            $w= Category::query()->where('id','=',$id)->get();
            return $w[0][$field];
        }
        else
        {
            return redirect('/');
        }
    }
    public function childs() {

        return $this->hasMany(Category::class,'parent_id','id') ;

    }

}
