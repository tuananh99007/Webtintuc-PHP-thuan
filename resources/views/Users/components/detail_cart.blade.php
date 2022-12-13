@extends('users.layouts.index')
@section('main-content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết đơn hàng
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Sản phẩm</th>
                                <th>Số Lượng</th>
                                <th>Giá 1 sản phẩm</th>
                                <th>Tổng giá tiền </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_cart as $index => $detail)
                                <tr>
                                    <td>{{ $detail->cart_id }}</td>
                                    <td>{{ $detail->products_name }}</td>
                                    <td>
                                        <img src="{{ asset($detail->picture) }}" alt="" style="height: 100px ">
                                    </td>
                                    <td>{{ $detail->amount }}</td>
                                    <td>{{ $detail->promotional_price }}</td>
                                    <td>{{ $detail->promotional_price * $detail->amount }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
@endsection
