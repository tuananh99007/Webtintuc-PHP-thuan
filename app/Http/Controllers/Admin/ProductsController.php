<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function list(Request $request)
    {
        $name = $request->input('name', null);
        $category = DB::table('category')->get()->toArray();
        $products = DB::table('products')->select(
            'products.id',
            'products.picture',
            'products.name',
            'category.name as category_name',
            'products.original_price',
            'products.promotional_price',
            'products.rating',
            'products.view',
            'products.is_delete'
        )
            ->join('category', 'products.category_id', '=', 'category.id')
            ->where('category.is_delete', 0)
            ->where('products.is_delete', 0);
        if (empty($category_id) != true) {
        }
        $products = $products->paginate(5);
        return view('Admin.products.list', compact('products', 'category', 'name'));
    }
    public function add()
    {
        $categories = DB::table('category')->select('id', 'name')->get()->toArray();
        return view('Admin.products.add', compact('categories'));
    }
    public function postadd(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|min:1|max:255',
            'original_price' => 'required',
            'promotional_price' => 'required',
            'picture' => 'required',
        ]);
        $category_id = $request->input('category_id', null);
        $name = $request->input('name', null);
        $original_price = $request->input('original_price', null);
        $promotional_price = $request->input('promotional_price', null);
        $posts = $request->input('posts', null);
        $is_delete = 0;
        // Lấy giá trị ảnh được upload
        $picture = $request->file('picture');
        // kiểm tra xem có giá trị hay chưa
        if (empty($picture) != true) {
            // Lấy tên mã hóa sản phẩm
            $namePicture = $picture->hashName();
            // Lấy url sản phẩm để lưu giá trị này vào db
            $urlPicture = "/upload/products/" . $namePicture;
            // store: để thực hiện lưu ảnh vào folder public/upload/products trên server
            $picture->store('upload/products');
        }
        DB::table('products')->insert([
            'category_id' => $category_id,
            'name' => $name,
            'original_price' => $original_price,
            'promotional_price' => $promotional_price,
            'picture' => $urlPicture,
            'posts' => $posts,
            'is_delete' => $is_delete
        ]);
        return redirect()->route('admin.products.list');
    }
    public function update(Request $request)
    {
        $id = $request->input('id', '');
        // $is_delete = $request->input('is_delete',);
        $product = DB::table('products')->select(
            'id',
            'category_id',
            'name',
            'original_price',
            'promotional_price',
            'rating',
            'posts',
            'picture',
            'account_id',
            'view'
        )
            ->where('id', $id)->where('is_delete',0)->first();
        if (empty($product) == true) {
            return redirect()->route('admin.products.list');
        }
        $categories = DB::table('category')->select('id', 'name')->get()->toArray();
        return view('Admin.products.update', compact('product', 'categories'));
    }
    public function postupdate(Request $request)
    {

        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|min:1|max:255',
            'original_price' => 'required',
            'promotional_price' => 'required',
        ]);
        $id = $request->input('id', '');
        $category_id = $request->input('category_id', null);
        $name = $request->input('name', null);
        $original_price = $request->input('original_price', null);
        $promotional_price = $request->input('promotional_price', null);
        $posts = $request->input('posts', null);
        // gọi ra để xóa ảnh có giá trị
        $product = DB::table('products')->select('picture')->where('id', $id)->first();
        // Lấy giá trị ảnh được upload
        $picture = $request->file('picture');
        if (empty($picture) != true) {
            // xóa ảnh cũ
            Storage::delete($product->picture);
            // Lấy tên mã hóa sản phẩm
            $namePicture = $picture->hashName();
            // Lấy url sản phẩm để lưu giá trị này vào db
            $urlPicture = "/upload/products/" . $namePicture;
            // store: để thực hiện lưu ảnh vào folder public/upload/products trên server
            $picture->store('upload/products');
        } else {
            $urlPicture = $product->picture;
        }
        DB::table('products')->where('id', $id)->update([
            'category_id' => $category_id,
            'name' => $name,
            'original_price' => $original_price,
            'promotional_price' => $promotional_price,
            'picture' => $urlPicture,
            'posts' => $posts
        ]);
        return redirect()->route('admin.products.list');
    }
    public function detail(Request $request)
    {
        $id = $request->input('id', '');
        $product = DB::table('products')
            ->select(
                'id',
                'name',
                'view',
                'description',
                'picture',
                'cost',
                'promotional_price',
                'evaluate',
                'display_flag',
                'category_id'
            )
            ->where('id', $id)->first();
        return view('Admin.products.detail', compact('product'));
    }
    public function delete(Request $request)
    {
        $id = $request->input('id', '');
        DB::table('products')->where('id', $id)->update(['is_delete' => 1]);
        return redirect()->route('admin.products.list');
    }
    public function bin(Request $request)
    {
        $is_delete = $request->input('is_delete', null);
        $category = DB::table('category')->get()->toArray();
        $bin = DB::table('products')->select("*")
            ->where('is_delete', '=', '1')->get()->toArray();
        return view('admin.products.bin', compact('bin', 'category'));
    }
    public function deleteforever(Request $request)
    {
        $id = $request->input('id', null);
        $product = DB::table('products')->select('picture')->where('id', $id)->first();
        Storage::delete($product->picture);
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('admin.products.bin');
    }
    public function restore(Request $request)
    {
        $id = $request->input('id', '');
        DB::table('products')->where('id', $id)->update([
            'is_delete' => 0,
        ]);
        return redirect()->route('admin.products.list');
    }
    public function restoreall()
    {
        DB::table('products')->where('is_delete', 1)->update([
            'is_delete' => 0,
        ]);
        DB::table('category')->where('is_delete', 1)->update([
            'is_delete' => 0,
        ]);
        return redirect()->route('admin.products.list');
    }
}
