@extends('Admin.layout.index')
@section('noidung')
    <div class="col-md-12">
        <!--   Basic Table  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Bang detail
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>alias</th>
                                <th>hot_flag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->alias }}</td>
                                <td>{{ $category->hot_flag }}</td>
                                <td>{{ $category->name }}</td>
                            </tr>
                            <tr>
                                <th>
                                    <a href="{{route('admin.category.list')}}" class="btn btn-info btn-lg">list</a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
@endsection
