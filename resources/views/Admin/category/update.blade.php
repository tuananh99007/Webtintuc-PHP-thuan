@extends('Admin.layout.index')
@section('noidung')
    <div class="panel panel-default">
        <div class="panel-heading">
            Bang update
        </div>
        <form role="form" method="POST" action="{{ route('admin.category.postupdate', ['id' => $category->id]) }}">
            @csrf
            <div class="form-group">
                <label>alias</label>
                <input class="form-control" name="alias" value="{{ $category->alias }}">
            </div>
            <div class="form-group">
                <label>hot_flag</label>
                <input class="form-control" name="hot_flag" value="{{ $category->hot_flag }}">
            </div>
            <div class="form-group">
                <label>name</label>
                <input class="form-control" name="name" value="{{ $category->name }}">
            </div>
            <button type="submit">gui di</button>
        </form>
    @endsection
