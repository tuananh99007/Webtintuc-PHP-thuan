@extends('admin.layout.index')
@section('noidung')
    {{-- <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tim Kiếm
            </div>
            <div class="panel-body">
                <form role="form" method="GET" action="{{ route('admin.category.list') }}">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Điền Tên</label>
                            <input class="form-control" name="name" value="{{ $name }}"
                                placeholder="Nhập Tên Sản Phẩm . . .">
                        </div>
                    </div>
                    <button type="submit">Tìm kiếm </button>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thùng Rác
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>alias</th>
                                <th>hot_flag</th>
                                <th>name</th>
                                <th>is_delete</th>
                                <th><a href="{{ route('admin.category.restoreall') }}"
                                    class="btn btn-primary btn-sm">Khôi Phục Tất Cả</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recycle_Bins as $item => $recycle_Bin)
                                <tr>
                                    <td>{{ $item + 1 }}</td>
                                    <td>{{ $recycle_Bin->alias }}</td>
                                    <td>{{ $recycle_Bin->hot_flag }}</td>
                                    <td>{{ $recycle_Bin->name }}</td>
                                    <td>{{ $recycle_Bin->is_delete }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.restore', ['id' => $recycle_Bin->id]) }}"
                                            class="btn btn-primary btn-sm">Khôi Phục</a>
                                        <a href="{{ route('admin.category.deleteforever', ['id' => $recycle_Bin->id]) }}"
                                            class="btn btn-danger btn-sm">Xóa Vĩnh Viễn</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $Recycle_Bin->links('Admin.components.pagination') }} --}}
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
@endsection
