@extends('Admin.layout.index')
@section('noidung')
    <div class="panel panel-default">
        <div class="panel-heading">
            Bang add
        </div>
        <form role="form" method="POST" action="{{ route('admin.category.postadd') }}">
            @csrf
            <div class="form-group">
                <label>alias</label>
                <input class="form-control" name="alias">
            </div>
            <div class="form-group">
                <label>hot_flag</label>
                <input class="form-control" name="hot_flag">
            </div>
            <div class="form-group">
                <label>name</label>
                <input class="form-control" name="name">
            </div>
            <button type="submit">gui di</button>
        </form>
    @endsection
