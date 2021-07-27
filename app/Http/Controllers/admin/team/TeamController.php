<?php

namespace App\Http\Controllers\admin\team;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Teams;
use App\Helper\imageUpload;
use Illuminate\Http\Request;
use File;

class TeamController extends Controller
{
    public function index()
    {
        $data = Teams::paginate(10);
        return view('admin.team.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.team.create');
    }
    public function store(Request $request)
    {
     $all= $request->except('_token');
     $all['selflink'] = mHelper::permalink($all['name']);
     $all['image'] = imageUpload::singleUpload(rand(1,90000),'team',$request->file('image'));
     $insert = Teams::create($all);
     if ($insert)
     {
         return redirect('admin/team')->with('status','Takım Başarıyla Eklendi');
     }
     else
     {
         return redirect()->refresh()->with('status','Bir Hata Meydana Geldi');
     }

    }
    public function edit($id)
    {
        $c = Teams::where('id','=',$id)->count();
        if ($c!=0)
        {
            $data = Teams::where('id','=',$id)->get();
            return view('admin.team.edit',['data'=>$data]);
        }
        else
        {
            return redirect('/');
        }
    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = Teams::where('id','=',$id)->count();
        if ($c!=0)
        {
            $data = Teams::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink']= mHelper::permalink($all['name']);
            $all['image'] = imageUpload::singleUploadUpdate(rand(1,900),'team',$request->file('image'),$data,'image');
            $update = Teams::where('id','=',$id)->update($all);
            if($update)
            {
                return redirect('admin/team')->with('status','Başarılı');

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
       $c = Teams::where('id','=',$id)->count();
       if ($c != 0)
       {
           $s = Teams::where('id','=',$id)->get();
           File::delete('public'.$s[0]['image']);
           Teams::where('id','=',$id)->delete();
           return redirect('admin/team')->with('status','Silme İşlemi Başarılı');
       }
       else
       {
           return redirect()->refresh()->with('status','Bir hata Meydana Geldi');
       }
    }
}
