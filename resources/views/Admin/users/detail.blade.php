@extends('admin.layout.index')
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
                                <th>name</th>
                                <th>email</th>
                                <th>password</th>
                                <th>remember_token</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->remember_token }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        <a href="{{route('admin.users.list')}}" class="btn btn-primary btn-sm">list</a>
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
