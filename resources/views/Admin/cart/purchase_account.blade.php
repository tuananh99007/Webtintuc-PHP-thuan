@extends('Admin.layout.index')
@section('noidung')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tài Khoản Mua Hàng
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tài Khoản</th>
                                <th>Email</th>
                                <th>Chi tiết giỏ hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchase_account as $index => $account)
                                <tr>
                                    <td>{{ $account->name }}</td>
                                    <td>{{ $account->email }}</td>
                                    <td>
                                        <a href="{{ route('admin.cart.listcarts', ['name' => $account->name]) }}"
                                            class="btn btn-primary btn-sm">Chi tiết</a>
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
