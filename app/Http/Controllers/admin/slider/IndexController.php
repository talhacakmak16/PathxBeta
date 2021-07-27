<?php

namespace App\Http\Controllers\admin\slider;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
public function index()
{
    $data = Slider::paginate(10);
    return view('admin.slider.index',['data'=>$data]);
}
public function create()
{
    return view('admin.slider.create');
}
public function store(Request $request)
{
    $all['image'] = imageUpload::singleUpload(rand(1,900),'slider',$request->file('image'));
    $id = $request->route('id');
    $insert = Slider::create($all);
    if ($insert)
    {
        return redirect('admin/slider')->with('status','Slider Eklendi');
    }
    else
    {
        return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
    }

}
public function edit($id)
{
    $data = Slider::where('id','=',$id)->get();
    return view('admin.slider.edit',['data'=>$data]);
}
public function update(Request $request)
{
    $id =$request->route('id');
    $data = Slider::where('id','=',$id)->get();
    $all['image'] = imageUpload::singleUploadUpdate(rand(1,900),'slider',$request->file('image'),$data,'image');

    $insert = Slider::where('id','=',$id)->update($all);
    if ($insert)
    {
        return redirect('admin/slider')->with('status','Slider Düzenlendi');
    }
    else
    {
        return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
    }

}
public function delete($id)
{
    $data = Slider::where('id','=',$id)->delete();
    return redirect()->back()->with('status','Silme İşlemi Başarılı');
}
}
