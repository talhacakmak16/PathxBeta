<?php

namespace App\Http\Controllers\front\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front/shop');
    }
}
