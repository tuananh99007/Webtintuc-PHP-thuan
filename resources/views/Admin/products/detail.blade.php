@extends('Admin.layout.index')
@section('noidung')
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
                                <th>name</th>
                                <th>author</th>
                                <th>view</th>
                                <th>description</th>
                                <th>picture</th>
                                <th>cost</th>
                                <th>promotional_price</th>
                                <th>evaluate</th>
                                <th>display_flag</th>
                                <th>category_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->author }}</td>
                                <td>{{ $product->view }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="{{ asset($product->picture) }}" alt="" style="height: 100px ">
                                </td>
                                <td>{{ $product->cost }}</td>
                                <td>{{ $product->promotional_price }}</td>
                                <td>{{ $product->evaluate }}</td>
                                <td>{{ $product->display_flag }}</td>
                                <td>{{ $product->category_id }}</td>
                            </tr>
                            <tr>
                                <th>
                                    <a href="{{ route('admin.products.list') }}">ve list</a>
                                </th>
                            </tr>
                        @endsection
