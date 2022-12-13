@extends('admin.layout.index')
@section('noidung')
<div class="panel panel-default">
    <div class="panel-heading">
        Bang update
<form role="form" method="POST" action="{{route('admin.users.postupdate',['id'=>$user->id])}}">
    @csrf
    <div class="form-group">
        <label>name</label>
        <input class="form-control" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label>email</label>
        <input class="form-control" name="email" value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label>password</label>
        <input class="form-control" name="password" type="password">
    </div>
    <div class="form-group">
        <label>remember_token</label>
        <input class="form-control" name="remember_token" value="{{$user->remember_token}}">
    </div>
    <button type="submit">gui di</button>
</form>
@endsection