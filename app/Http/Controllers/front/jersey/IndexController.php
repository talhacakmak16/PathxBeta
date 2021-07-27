<?php

namespace App\Http\Controllers\front\jersey;

use App\Http\Controllers\Controller;
use App\Models\TeamJerseys;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($selflink)
    {

        $c = TeamJerseys::where('selflink','=',$selflink)->count();
        if ($c != 0)
        {
            $w = TeamJerseys::where('selflink','=',$selflink)->get();
            return view('front/detail/index ',['data'=>$w]);
        }
        else
        {
            return redirect('/');
        }
    }
}
