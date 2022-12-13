@extends('Admin.layout.index')
@section('noidung')
    <div class="col-md-12">
        <!--   Basic Table  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <form role="form" method="GET" action="{{ route('admin.products.list') }}">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Tìm Kiếm</label>
                            <input class="form-control" name="name" value="{{ $name }}"
                                placeholder="Nhập Tên Sản Phẩm . . .">
                        </div>
                    </div>
                    <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle" type="submit">Tìm Kiếm </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <!--   Basic Table  -->
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
                                <th>picture</th>
                                <th>name</th>
                                <th>category_name</th>
                                <th>original_price</th>
                                <th>promotional_price</th>
                                <th>rating</th>
                                <th>view</th>
                                <th>
                                    <a href="{{ route('admin.products.add') }}" class="btn btn-primary btn-sm">add</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item => $product)
                                <tr>
                                    <td>{{ $item + 1 }}</td>
                                    <td>
                                        <img src="{{ asset($product->picture) }}" alt="" style="height: 100px ">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->original_price }}</td>
                                    <td>{{ $product->promotional_price }}</td>
                                    <td>{{ $product->rating }}</td>
                                    <td>{{ $product->view }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.detail', ['id' => $product->id]) }}"
                                            class="btn btn-primary btn-sm">detail</a>
                                        <a href="{{ route('admin.products.update', ['id' => $product->id]) }}"
                                            class="btn btn-danger btn-sm">update</a>
                                        <a href="{{ route('admin.products.delete', ['id' => $product->id]) }}"
                                            class="btn btn-success btn-sm">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links('Admin.components.pagination') }}
                    <button type="submit">
                        <a href="{{ route('admin.products.bin') }}">thùng rác</a>
                    </button>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
@endsection
