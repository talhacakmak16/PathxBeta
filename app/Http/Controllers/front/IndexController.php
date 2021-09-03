<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Brands;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function profile()
    {
        $name = \Auth::user()->name;
        return view('front.profile',compact('name'));
    }
}
