@extends('admin.layout.index')
@section('noidung')
<div class="panel panel-default">
    <div class="panel-heading">
        Bang add
    <form role="form" method="POST"  action="{{ route('admin.users.postadd') }}">
        @csrf
        <div class="row">
            <div class="form-group col-lg-6">
                <label>name</label>
                <input class="form-control" name="name" value="{{$name}}">
                @if (empty($name) == true)
                    <p style="color: red">chua co gia tri name</p>
                @endif
            </div>
            <div class="form-group col-lg-6">
                <label>email</label>
                <input class="form-control" name="email" value="{{$email}}">
                @if (empty($email) == true)
                    <p style="color: red">chua co gia tri email</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>password</label>
                <input class="form-control" name="password" value="{{$password}}">
                @if (empty($password) == true)
                    <p style="color: red">chua co gia tri password</p>
                @endif
            </div>
            <div class="form-group col-lg-6">
                <label>remember_token</label>
                <input class="form-control" name="remember_token" value="{{$remember_token}}">
                @if (empty($remember_token) == true)
                    <p style="color: red">chua co gia tri remember_token</p>
                @endif
            </div>
        </div>
        <button type="submit">gui di</button>
    </form>
@endsection