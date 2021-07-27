<?php
namespace App\Helper;
use Illuminate\Support\Facades\Session;

class basketHelper
{
    static function add($id,$price,$image,$name)
    {
        $sepet = Session::get('basket');

        $array = [
            'id'=>$id,
            'image'=>$image,
            'name'=>$name,
            'price'=>$price,


        ];

        Session::put('basket.'.rand(1,9000),$array);
    }
    static function allList()
    {
        $x = Session::get('basket');

        return $x;
    }
    static function totalPrice()
    {
         $data = self::allList();


         return collect($data)->sum('price');
    }
    static function remove($id)
    {

        Session::forget('basket.'.$id);
    }
    static function countData()
    {
        return count(Session::get('basket'));
    }
}
