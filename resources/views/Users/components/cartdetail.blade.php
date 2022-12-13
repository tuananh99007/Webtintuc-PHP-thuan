@extends('users.layouts.index')
@section('main-content')
    <table border="1">
        <tr>
            <th>id san pham</th>
            <th>hinh anh</th>
            <th>ten san pham</th>
            <th>so luong san pham</th>
            <th>gia tien san pham</th>
            <th>gia tong san pham</th>
            <th>them san pham </th>
            <th>giam san pham </th>
            <th>xoa san pham</th>
        </tr>
        @foreach ($cartdetail as $index => $cart)
            <tr>
                <td>{{ $cart->product_id }}</td>
                <td>
                    <img src="{{ asset($cart->picture) }}" alt="" style="height: 100px ">
                </td>
                <td>{{ $cart->name }}</td>
                <td>{{ $cart->amount }}</td>
                <td>{{ $cart->promotional_price }}</td>
                <td>{{ $cart->amount * $cart->promotional_price }}</td>
                <td>
                    <a href="{{ route('users.components.add_cart', ['product_id' => $cart->product_id]) }}">Thêm</a>
                </td>
                <td>
                    <a href="{{ route('users.components.reduce_cart', ['product_id' => $cart->product_id]) }}">Giảm</a>
                </td>
                <td>
                    <a href="{{ route('users.components.delete_cart', ['product_id' => $cart->product_id]) }}">Xóa</a>
                </td>
            </tr>
        @endforeach
        <table border="1">
            <tr>
                <th>Tổng Tiền</th>
            </tr>
            <tr>
                <td>{{ $promotional_price_cart }}</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('users.components.wait_for_confirmation') }}">Đặt Hàng</a>
                </td>
            </tr>
        </table>
    </table>
@endsection
