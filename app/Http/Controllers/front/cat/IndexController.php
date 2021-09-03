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
             $categories = Category::query()->where('parent_id', '=', 0)->get();
             $allCategories = Category::query()->paginate(10);
             $w = Category::query()->where('selflink','=', $selflink)->first();
             $data = TeamJerseys::query()->where('categoryid', $w->id)->paginate(15);
             return view('front.cat.index',compact('w','data','allCategories','categories'));
         }
         else
         {

             return redirect('/');

         }
    }


}
