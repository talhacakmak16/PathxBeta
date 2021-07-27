<?php

namespace App\Http\Controllers\admin\jersey;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Category;
use App\Models\TeamJerseys;
use App\Models\Teams;
use Illuminate\Http\Request;
use File;

class JerseyController extends Controller
{
    public function index()
    {
        $data = TeamJerseys::paginate(10);
        return view('admin.jersey.index',['data'=>$data]);
    }
    public function create()
    {
        $brand = Brands::all();
        $team = Teams::all();
        $category = Category::all();
     return view('admin.jersey.create',['category'=>$category,'brand'=>$brand,'team'=>$team]);
    }
    public function store(Request $request)
    {
      $all = $request->except('_token');
      $all['selflink']=mHelper::permalink('name');
      $all['image'] = imageUpload::singleUpload(rand(1,900),'jersey',$request->file('image'));
      $insert = TeamJerseys::create($all);
      if ($insert)
      {
          return redirect('admin/jersey')->with('status','İşlem Başarılı');
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
        $c= TeamJerseys::where('id','=',$id)->count();
        if ($c !=0)
        {
            $data = TeamJerseys::where('id','=',$id)->get();
            return view('admin.jersey.edit',['category'=>$category,'data'=>$data,'team'=>$team,'brand'=>$brand]);
        }
        else
        {
            return view('/jersey');
        }

    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = TeamJerseys::where('id','=',$id)->count();
        if ($c!=0)
        {
            $data = TeamJerseys::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink']= mHelper::permalink($all['name']);
            $all['image'] = imageUpload::singleUploadUpdate(rand(1,900),'jersey',$request->file('image'),$data,'image');
            $update = TeamJerseys::where('id','=',$id)->update($all);
            if($update)
            {
                return redirect('admin/jersey')->with('status','Başarılı');

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
      $c = TeamJerseys::where('id','=',$id)->count();
      if ($c !=0)
      {
          $s= TeamJerseys::where('id','=',$id)->get();
          File::delete('public'.$s[0]['image']);
          TeamJerseys::where('id','=',$id)->delete();
          return redirect('admin/jersey')->with('status','İşlem Başarılı');

      }
      else
      {
          return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
      }
    }
}
