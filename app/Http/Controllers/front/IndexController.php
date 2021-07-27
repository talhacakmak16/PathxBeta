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
}
