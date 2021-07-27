<?php

namespace App\Http\Controllers\admin\brand;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Brands::paginate(10);
        return view('admin.brand.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.brand.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] =mHelper::permalink($all['name']);
        $insert = Brands::create($all);
        if ($insert)
        {
            return redirect('admin/brand')->with('status','Marka Başarı İle Eklendi');
        }
        else
        {
            return redirect()->back()->with('status','Marka Eklenemedi');
        }
    }
    public function edit($id)
    {
        $data = Brands::where('id','=',$id)->get();
        return view('admin.brand.edit',['data'=>$data]);

    }
    public function update(Request $request)
    {

        $id= $request->route('id');

            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $update= Brands::where('id','=',$id)->update($all);
            if ($update)
            {
                return redirect('admin/brand')->with('status','Marka Başarıyla Düzenlendi');
            }
            else
            {
                return redirect()->refresh()->with('status','Düzenlemede Bir Hata Meydana Geldi');
            }
    }
    public function delete($id)
    {
        $delete = Brands::where('id','=',$id)->delete();
        if ($delete)
        {
            return redirect('/admin/brand')->with('status','Silme İşlemi Başarılı');
        }
        else
        {
            return redirect()->refresh()->with('status','Silme İşleminde Bir Hata Oluştu');
        }
    }

}
