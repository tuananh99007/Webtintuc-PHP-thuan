<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function list(Request $request)
    {
        $name = $request->input('name', null);
        $categorys = DB::table('category')->select("id", 'alias', 'hot_flag', 'name', 'is_delete')
            ->where('is_delete', '=', '0');
        if (!empty($name)) {
            $categorys = $categorys->where('name', 'like', '%' . $name . '%');
        };
        $categorys = $categorys->paginate(10);
        return view('Admin.category.list', compact('categorys', 'name'));
    }
    public function add()
    {
        return view('Admin.category.add');
    }
    public function postadd(Request $request)
    {
        $alias = $request->input('alias', '');
        $hot_flag = $request->input('hot_flag', '');
        $name = $request->input('name', '');
        $is_delete = 0;
        if (
            empty($alias) != true &&
            empty($hot_flag) != true &&
            empty($name) != true
        ) {
            DB::table('category')->insert([
                'alias' => $alias,
                'hot_flag' => $hot_flag,
                'name' => $name,
                'is_delete' => $is_delete,
            ]);
            return redirect()->route('admin.category.list');
        } else {
            return view('admin.category.postadd', compact('alias', 'hot_flag', 'name', 'is_delete'));
        }
    }
    public function update(Request $request)
    {
        $id = $request->input('id', '');
        $category = DB::table('category')->select('id', 'hot_flag', 'alias', 'name',)->where('id', $id)->first();
        return view('Admin.category.update', compact('category'));
    }
    public function postupdate(Request $request)
    {
        $id = $request->input('id', '');
        $alias = $request->input('alias', '');
        $hot_flag = $request->input('hot_flag', '');
        $name = $request->input('name', '');
        DB::table('category')->where('id', $id)->update([
            'alias' => $alias,
            'hot_flag' => $hot_flag,
            'name' => $name,
        ]);
        return redirect()->route('admin.category.list');
    }
    public function detail(Request $request)
    {
        $id = $request->input('id', '');
        $category = DB::table('category')->select('id', 'hot_flag', 'alias', 'name', 'is_delete')->where('id', $id)->first();
        return view('Admin.category.detail', compact('category'));
    }
    public function delete(Request $request)
    {
        $id = $request->input('id', '');
        DB::table('category')->where('id', $id)->update([
            'is_delete' => 1,
        ]);
        DB::table('products')->where('category_id', $id)->update([
            'is_delete' => 1,
        ]);
        return redirect()->route('admin.category.list');
    }
    public function recycle_bin(Request $request)
    {
        $is_delete = $request->input('is_delete', null);
        $recycle_Bins = DB::table('category')->select('id', 'hot_flag', 'alias', 'name', 'is_delete')
            ->where('is_delete', '=', '1')->get()->toArray();
        return view('admin.category.recycle_bin', compact('recycle_Bins'));
    }
    public function deleteforever(Request $request)
    {
        $id = $request->input('id', null);
        DB::table('category')->where('id', $id)->delete();
        // bỏi vì khi xóa 1 danh mục sẽ có nhiều ảnh thì mk cần dùng get ->arrayarray
        $productList = DB::table('products')->select('picture')->where('category_id', $id)->get()->toArray();
        // vì data là array nên mk phải forech nó ra
        foreach ($productList as $key => $products) {
            Storage::delete($products->picture);
        }
        DB::table('products')->where('category_id', $id)->delete();
        return redirect()->route('admin.category.recycle_bin');
    }
    public function restore(Request $request)
    {
        $id = $request->input('id', '');
        DB::table('category')->where('id', $id)->update([
            'is_delete' => 0,
        ]);
        DB::table('products')->where('category_id', $id)->update([
            'is_delete' => 0,
        ]);
        return redirect()->route('admin.category.list');
    }
    public function restoreall()
    {
        DB::table('category')->where('is_delete', 1)->update([
            'is_delete' => 0,
        ]);
        DB::table('products')->where('is_delete', 1)->update([
            'is_delete' => 0
        ]);
        return redirect()->route('admin.category.list');
    }
}
