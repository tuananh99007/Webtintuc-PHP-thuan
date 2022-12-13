@extends('admin.layout.authenticate')
@section('noidung')
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                MAN HÌNH ĐĂNG NHẬP
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.users.post_login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Địa chỉ mail</label>
                            <input class="form-control" name="email" placeholder="Nhập địa chỉ email . . .">
                            @error('email')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu . . .">
                            @error('password')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Hoàn thành</button>
                    </form>
                </div>
            </div>
        </div>
        <!--  end  Context Classes  -->
    </div>
@endsection
