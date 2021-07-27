<?php

namespace App\Http\Controllers\admin\category;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Category::paginate(10);
        return view('admin.category.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] =mHelper::permalink($all['name']);
        $insert = Category::create($all);
        if ($insert)
        {
            return redirect('admin/category')->with('status','Kategori Başarı İle Eklendi');
        }
        else
        {
            return redirect()->back()->with('status','Kategori Eklenemedi');
        }
    }
    public function edit($id)
    {
        $data = Category::where('id','=',$id)->get();
        return view('admin.category.edit',['data'=>$data]);

    }
    public function update(Request $request)
    {

        $id= $request->route('id');

        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $update= Category::where('id','=',$id)->update($all);
        if ($update)
        {
            return redirect('admin/category')->with('status','Kategori Başarıyla Düzenlendi');
        }
        else
        {
            return redirect()->refresh()->with('status','Düzenlemede Bir Hata Meydana Geldi');
        }
    }
    public function delete($id)
    {
        $delete = Category::where('id','=',$id)->delete();
        if ($delete)
        {
            return redirect('/admin/category')->with('status','Silme İşlemi Başarılı');
        }
        else
        {
            return redirect()->refresh()->with('status','Silme İşleminde Bir Hata Oluştu');
        }
    }
}
