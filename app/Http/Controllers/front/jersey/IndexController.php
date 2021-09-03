<?php

namespace App\Http\Controllers\front\jersey;

use App\Http\Controllers\Controller;
use App\Models\TeamJerseys;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class IndexController extends Controller
{
    public function index($selflink)
    {

        $qr = QrCode::size(250)
            ->backgroundColor(255, 255, 204)
            ->generate('QrCode');


        $c = TeamJerseys::where('selflink','=',$selflink)->count();
        if ($c != 0)
        {
            $w = TeamJerseys::where('selflink','=',$selflink)->get();
            return view('front/detail/index ',compact('w','qr'));
        }
        else
        {
            return redirect('/');
        }
    }
}
