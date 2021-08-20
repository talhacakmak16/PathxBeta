<?php

namespace App\Http\Controllers\front\cat;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TeamJerseys;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($selflink)
    {
         $c = Category::query()->where('selflink', $selflink)->exists();

         if ($c)
         {
             $w = Category::query()->where('selflink','=', $selflink)->first();
             $data = TeamJerseys::query()->where('categoryid', $w->id)->paginate(15);
             return view('front.cat.index',[
                 'info'=>$w,
                 'data' => $data
             ]);
         }
         else
         {

             return redirect('/');

         }
    }


}
