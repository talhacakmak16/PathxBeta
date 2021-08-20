<?php

namespace App\Http\Controllers\front\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TeamJerseys;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

       $data = TeamJerseys::query()->paginate(10);
        return view('front/shop',[
            'data' => $data,
            ]);


    }
}
