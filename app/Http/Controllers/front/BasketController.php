<?php

namespace App\Http\Controllers\front;

use App\Helper\basketHelper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\TeamJerseys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    public function edit()
    {

        return view('front\basket\basket');
    }
    public function index($id)
    {
     $c = TeamJerseys::where('id','=',$id)->count();
     if ($c != 0)
     {
       $w = TeamJerseys::where('id','=',$id)->get();

       basketHelper::add($id,$w[0]['price'],asset($w[0]['image']),$w[0]['name']);
       return redirect()->back()->with('status','Sepete Eklediniz');
     }
     else
     {
     return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
     }
    }
    public function remove($id)
    {
     basketHelper::remove($id);
     return redirect()->back();
    }
    public function complete()
    {
        if (basketHelper::countData()!=0)
        {
            return view('front.basket.complete');
        }
        else
        {
            return redirect('/');
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'adress'=>'required',
            'email'=>'required|email',
        ]);
        $adress = $request->input('adress');
        $name = $request->input('name');
        $message = $request->input('message');
        $phone = $request->input('phone');
        $json = json_encode(basketHelper::allList());
        $array =
            [
                'adress'=>$adress,
                'phone' =>$phone,
                'name' => $name,
                'message' => $message,
                'json'=>$json
            ];
        $insert = Order::create($array);
        if ($insert)
        {
            Session::forget('basket');
            return redirect('/')->with('status','Siparişiniz Başarıyla Alındı');

        }
        else
        {
            return redirect('/');
        }
    }
    public function flush()
    {
        Session::forget('basket');
        return redirect('/');
    }
}
