<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function purchase_account()
    {
        $purchase_account = DB::table('carts')->select(
            'users.name',
            'users.email'
        )
            ->join('users', 'users.id', '=', 'carts.user_id')
            ->get()->toArray();
        return view('admin.cart.purchase_account', compact('purchase_account'));
    }
    public function listcarts(Request $request)
    {
        $name = $request->input('name', null);
        $listcarts = DB::table('carts')
            ->select(
                'carts.id',
                'users.name',
                'carts.status'
            )
            ->join('users', 'users.id', '=', 'carts.user_id')
            ->where('name', $name)
            ->get()->toArray();
        return view('admin.cart.listcarts', compact('listcarts'));
    }
    public function detail_cart(Request $request)
    {
        $id = $request->input('id', null);
        $detail_cart = DB::table('carts')->select(
            'cart_details.cart_id',
            'cart_details.amount',
            'users.name as user_name',
            'products.name as products_name',
            'products.promotional_price',
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
        return view('admin.cart.detail_cart', compact('detail_cart', 'total_money'));
    }
    public function confirm(Request $request)
    {
        $id = $request->input('id', null);
        DB::table('carts')->select('')->where('id',$id)->update([
            'status'=>2,
        ]);
        return redirect()->back();

    }
}
