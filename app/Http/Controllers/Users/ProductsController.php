<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function Detail(Request $request)
    {
        $id = $request->input('id', '');
        $productsDetail = DB::table('products')
            ->select(
                'id',
                'category_id',
                'name',
                'original_price',
                'promotional_price',
                'rating',
                'posts',
                'picture',
                'account_id',
                'view',
                'is_delete'
            )
            ->where('is_delete', 0)
            ->where('id', $id)->first();
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
        $categoryList = DB::table('category')
            ->select('id', 'name')->get()->toArray();

        return view('users.products.detail', compact('productsDetail', 'categoryList', 'cartInfo', 'amount'));
    }
    //chi tiết giỏ hàng
    public function cartdetail(Request $request)
    {
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
        foreach ($cartInfo as $key => $cartI) {
            $amount =  $cartI->amount + $amount;
        }
        $categoryList = DB::table('category')->select('id', 'name')->where('is_delete', 0)->get()->toArray();
        $cartdetail = DB::table('carts')->select(
            'carts.user_id',
            'products.name',
            'products.promotional_price',
            'cart_details.amount',
            'products.picture',
            'cart_details.product_id'
        )
            ->join('cart_details', 'carts.id', '=', 'cart_details.cart_id')
            ->join('products', 'products.id', '=', 'cart_details.product_id')
            ->where('carts.user_id', 111)
            ->where('status', 0)
            ->get()->toArray();

        $promotional_price_cart = 0;
        foreach ($cartdetail as $index => $cartd) {
            $promotional_price_cart =  $promotional_price_cart + $cartd->promotional_price * $cartd->amount;
        }

        return view('Users.components.cartdetail', compact('cartdetail', 'cartInfo', 'amount', 'categoryList', 'promotional_price_cart'));
    }
    //xóa đơn hàng
    public function delete_cart(Request $request)
    {
        $product_id = $request->input('product_id', null);
        $cart_id = DB::table('carts')->select('id')->first();
        DB::table('cart_details')
            ->where('cart_id', $cart_id->id)
            ->where('product_id', $product_id)
            ->delete();
        return redirect()->route('users.components.cartdetail');
    }
    //thêm số lượng đơn hàng
    public function add_cart(Request $request)
    {
        $product_id = $request->input('product_id', null);
        $cart_id = DB::table('carts')->select('id')->first();
        $cart_detail = DB::table('cart_details')->select('*')
            ->where('product_id', $product_id)->first();
        DB::table('cart_details')
            ->where('cart_id', $cart_id->id)
            ->where('product_id', $product_id)
            ->update(
                [
                    'amount' => $cart_detail->amount + 1
                ]
            );
        return redirect()->route('users.components.cartdetail');
    }
    //giảm số lượng đơn hàng
    public function reduce_cart(Request $request)
    {
        $product_id = $request->input('product_id', null);
        $cart_id = DB::table('carts')->select('id')->where('cart_id', 111)->first();
        $cart_detail = DB::table('cart_details')->select('*')
            ->where('cart_id', $cart_id->id)
            ->where('product_id', $product_id)->first();
        DB::table('cart_details')
            ->where('cart_id', $cart_id->id)
            ->where('product_id', $product_id)
            ->update(
                [
                    'amount' => $cart_detail->amount - 1
                ]
            );
        if ($cart_detail->amount <= 1) {
            DB::table('cart_details')
                ->where('cart_id', $cart_id->id)
                ->where('product_id', $product_id)
                ->delete();
            return redirect()->route('users.components.cartdetail');
        }
        return redirect()->route('users.components.cartdetail');
    }
}
