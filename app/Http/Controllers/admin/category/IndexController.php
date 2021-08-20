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
        $categories = Category::query()->where('parent_id', '=', 0)->get();
        $allCategories = Category::query()->paginate(10);
        return view('admin.category.index',compact('categories','allCategories'));
    }
    public function create()
    {
        $categories = Category::query()->where('parent_id', '=', 0)->get();
        $allCategories = Category::query()->paginate(10);

        return view('admin.category.create',compact('categories','allCategories'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->except('_token');
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $input['selflink']=mHelper::permalink($input['name']);

        Category::create($input);
        return redirect('admin/category')->with('status', 'New Category added successfully.');

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
