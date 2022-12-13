<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $id = $request->input('id', '');
        $name = $request->input('name', '');
        $productsList = DB::table('products')
            ->select('id', 'category_id', 'name', 'original_price', 'promotional_price', 'rating', 'posts', 'picture', 'account_id', 'view')
            ->where('is_delete', 0)->get()->toArray();
        $categoryList = DB::table('category')->select('id', 'name')->where('is_delete', 0)->get()->toArray();
        $cartInfo = DB::table('carts')
            ->select(
                'carts.id',
                'carts.user_id',
                'cart_details.product_id',
                'cart_details.amount'
            )
            ->join('cart_details', 'carts.id', '=', 'cart_details.cart_id')
            ->where('carts.user_id', 111)
            ->get()
            ->toArray();
        $amount = 0;
        foreach ($cartInfo as $key => $item) {
            $amount =  $item->amount + $amount;
        }
        return view('users.home', compact('productsList', 'categoryList', 'cartInfo', 'amount'));
    }

    public function Category(Request $request)
    {
        $category_id = $request->input('category_id', '');
        $productsList = DB::table('products')->select(
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
        )->where('category_id', $category_id)->get()->toArray();
        $categoryList = DB::table('category')->select('id', 'name')->get()->toArray();
        return view('users.components.category', compact('productsList', 'categoryList'));
    }
    //giỏ hàng
    public function carts(Request $request)
    {
        $product_id = $request->input('product_id', null);
        $cart = DB::table('carts')->select('id', 'user_id', 'status')
            ->where('user_id', 111)
            ->where('status', 0)
            ->first();
        if (empty($cart)) {
            DB::table('carts')->insert([
                'user_id' => 111,
                'status' => 0,
            ]);
        }
        $cart_details = DB::table('cart_details')->select('product_id', 'id', 'cart_id', 'amount')
            ->where('cart_id', $cart->id)
            ->where('product_id', $product_id)->first();
        if (empty($cart_details)) {
            DB::table('cart_details')->select('product_id')->insert([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'amount' => 1
            ]);
        } else {
            DB::table('cart_details')->select('product_id')
                ->where('cart_id', $cart->id)
                ->where('product_id', $product_id)
                ->update([
                    'amount' => $cart_details->amount + 1,
                ]);
        }
    }
    public function order(Request $request)
    {
        Auth::user();
        $categoryList = DB::table('category')->select('id', 'name')->where('is_delete', 0)->get()->toArray();
        $cartInfo = DB::table('carts')
            ->select(
                'carts.id',
                'carts.user_id',
                'cart_details.product_id',
                'cart_details.amount',
            )
            ->join('cart_details', 'carts.id', '=', 'cart_details.cart_id')
            ->where('carts.user_id', 111)
            ->get()
            ->toArray();
        $amount = 0;
        foreach ($cartInfo as $key => $item) {
            $amount =  $item->amount + $amount;
        }
        DB::table('carts')->select('id', 'user_id', 'status')
            ->where('user_id', 111)->where('status', 0)->update([
                'status' => 1
            ]);
        return view('users.components.complete', compact('amount', 'cartInfo', 'categoryList'));
    }
    // màn hình chờ xác nhận
    public function wait_for_confirmation(Request $request)
    {
        $categoryList = DB::table('category')->select('id', 'name')->where('is_delete', 0)->get()->toArray();
        $cartInfo = DB::table('carts')
            ->select(
                'carts.id',
                'carts.user_id',
                'cart_details.product_id',
                'cart_details.amount',
            )
            ->join('cart_details', 'carts.id', '=', 'cart_details.cart_id')
            ->where('carts.user_id', 111)
            ->get()
            ->toArray();
        $amount = 0;
        foreach ($cartInfo as $key => $item) {
            $amount =  $item->amount + $amount;
        }
        $wait_for_confirmations = DB::table('carts')
            ->select(
                'carts.id',
                'users.name',
                'status'
            )
            ->join('users', 'users.id', '=', 'carts.user_id')
            ->where('carts.user_id', 111)
            ->where('status', 1)
            ->orWhere('status', 2)
            ->orWhere('status', 3)
            ->get()->toArray();
        return view(
            'users.components.wait_for_confirmation',
            compact('amount', 'cartInfo', 'categoryList', 'wait_for_confirmations')
        );
    }
    public function detail_cart(Request $request)
    {
        $categoryList = DB::table('category')->select('id', 'name')->where('is_delete', 0)->get()->toArray();
        $cartInfo = DB::table('carts')
            ->select(
                'carts.id',
                'carts.user_id',
                'cart_details.product_id',
                'cart_details.amount',
            )
            ->join('cart_details', 'carts.id', '=', 'cart_details.cart_id')
            ->where('carts.user_id', 111)
            ->get()
            ->toArray();
        $amount = 0;
        foreach ($cartInfo as $key => $item) {
            $amount =  $item->amount + $amount;
        }
        $id = $request->input('id', null);
        $detail_cart = DB::table('carts')->select(
            'cart_details.cart_id',
            'users.name as user_name',
            'products.name as products_name',
            'products.promotional_price',
            'cart_details.amount',
            'products.picture',
            'carts.status'
        )
            ->join('cart_details', 'carts.id', '=', 'cart_details.cart_id')
            ->join('products', 'products.id', '=', 'cart_details.product_id')
            ->join('users', 'users.id', '=', 'carts.user_id')
            ->where('cart_id', $id)
            ->get()->toArray();
        $total_money = 0;
        foreach ($detail_cart as $index => $cart) {
            $total_money = $total_money + $cart->promotional_price * $cart->amount;
        }
        return view('users.components.detail_cart', compact('detail_cart', 'total_money', 'amount', 'cartInfo', 'categoryList'));
    }
    public function confirm(Request $request)
    {
        $id = $request->input('id', null);
        DB::table('carts')->where('id', $id)
            ->update([
                'status' => 3,
            ]);
        return redirect()->back();
    }
}
