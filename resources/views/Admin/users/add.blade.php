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
                <input class="form-control" name="name">
            </div>
            <div class="form-group col-lg-6">
                <label>email</label>
                <input class="form-control" name="email">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>password</label>
                <input class="form-control" name="password">
            </div>
            <div class="form-group col-lg-6">
                <label>remember_token</label>
                <input class="form-control" name="remember_token">
            </div>
        </div>
        <button type="submit">gui di</button>
    </form>
@endsection