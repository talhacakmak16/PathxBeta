<?php

namespace App\Http\Controllers\front\search;

use App\Http\Controllers\Controller;
use App\Models\TeamJerseys;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
       if (strip_tags($_GET['q'])!="")
       {
         $q =$_GET['q'];
         $data = TeamJerseys::where('name','like','%'.$q.'%')->paginate(10);
         return view('front.search.index',['data'=>$data]);
       }
       else
       {
           return redirect('/');
       }
    }
}
