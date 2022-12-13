@extends('admin.layout.index')
@section('noidung')
    <div class="col-md-12">
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
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Bang list
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
                                <th>
                                    <a href="{{ route('admin.category.add') }}" class="btn btn-primary btn-sm">add</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $item => $category)
                                <tr>
                                    <td>{{ $item + 1 }}</td>
                                    <td>{{ $category->alias }}</td>
                                    <td>{{ $category->hot_flag }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->is_delete }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.detail', ['id' => $category->id]) }}"
                                            class="btn btn-primary btn-sm">detail</a>
                                        <a href="{{ route('admin.category.update', ['id' => $category->id]) }}"
                                            class="btn btn-danger btn-sm">update</a>
                                        <a href="{{ route('admin.category.delete', ['id' => $category->id]) }}"
                                            class="btn btn-success btn-sm">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit">
                        <a href="{{ route('admin.category.recycle_bin') }}">thùng rác</a>
                    </button>
                    {{ $categorys->links('Admin.components.pagination') }}
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
@endsection
