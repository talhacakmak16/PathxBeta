<?php

namespace App\Http\Controllers\admin\special;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Category;
use App\Models\SpecialModel;
use App\Models\TeamJerseys;
use App\Models\Teams;
use Illuminate\Http\Request;
use File;

class IndexController extends Controller
{
  public function index()
  {
      $data = SpecialModel::paginate(10);
      return view('admin.special.index',['data'=>$data]);
  }
    public function create()
    {
        $brand = Brands::all();
        $team = Teams::all();
        $category = Category::all();
        return view('admin.special.create',['category'=>$category,'brand'=>$brand,'team'=>$team]);
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink']=mHelper::permalink($all['name']);
        $all['image'] = imageUpload::singleUpload(rand(1,900),'jersey',$request->file('image'));
        $insert = SpecialModel::create($all);
        if ($insert)
        {
            return redirect('admin/special')->with('status','İşlem Başarılı');
        }
        else
        {
            return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
        }
    }
    public function edit($id)
    {
        $brand = Brands::all();
        $team = Teams::all();
        $category= Category::all();
        $c= SpecialModel::where('id','=',$id)->count();
        if ($c !=0)
        {
            $data = SpecialModel::where('id','=',$id)->get();
            return view('admin.special.edit',['category'=>$category,'data'=>$data,'team'=>$team,'brand'=>$brand]);
        }
        else
        {
            return view('/special');
        }

    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = SpecialModel::where('id','=',$id)->count();
        if ($c!=0)
        {
            $data = SpecialModel::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink']= mHelper::permalink($all['name']);
            $all['image'] = imageUpload::singleUploadUpdate(rand(1,900),'jersey',$request->file('image'),$data,'image');
            $update = SpecialModel::where('id','=',$id)->update($all);
            if($update)
            {
                return redirect('admin/special')->with('status','Başarılı');

            }
            else
            {
                return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
            }
        }
        else
        {
            return redirect('/');
        }
    }
    public function delete($id)
    {
        $c = SpecialModel::where('id','=',$id)->count();
        if ($c !=0)
        {
            $s= SpecialModel::where('id','=',$id)->get();
            File::delete('public'.$s[0]['image']);
            SpecialModel::where('id','=',$id)->delete();
            return redirect('admin/special')->with('status','İşlem Başarılı');

        }
        else
        {
            return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
        }
    }
}
