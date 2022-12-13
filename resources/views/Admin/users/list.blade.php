@extends('admin.layout.index')
@section('noidung')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Tim Kiếm
        </div>
        <div class="panel-body">
            <form role="form" method="GET" action="{{ route('admin.users.list') }}">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label>Điền Email</label>
                        <input class="form-control" name="email" value="{{ $email }}"
                            placeholder="Nhập Email . . .">
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
                Bang LIST
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th><a href="{{ route('admin.users.add') }}" class="btn btn-danger">add</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.detail', ['id' => $user->id]) }}"
                                            class="btn btn-warning">detail</a>
                                        <a href="{{ route('admin.users.update', ['id' => $user->id]) }}"
                                            class="btn btn-info">update</a>
                                        <a href="{{ route('admin.users.delete', ['id' => $user->id]) }}"
                                            class="btn btn-success">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links('Admin.components.pagination') }}
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
@endsection
