@extends('Admin.layout.index')
@section('noidung')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết đơn mua
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tai khoan mua hàng</th>
                                <th>Chi tiết đơn hàng</th>
                                <th>Xác Nhận</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listcarts as $index => $listcart)
                                <tr>
                                    <td>{{ $listcart->id }}</td>
                                    <td>{{ $listcart->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.cart.detail_cart', ['id' => $listcart->id]) }}"
                                            class="btn btn-primary btn-sm">Chi tiết</a>
                                    </td>
                                    <td>
                                        @if ($listcart->status == 1)
                                            <a href="{{ route('admin.cart.confirm', ['id' => $listcart->id])}}"
                                                class="btn btn-danger btn-sm">Xác Nhận</a>
                                        @endif
                                    </td>
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
