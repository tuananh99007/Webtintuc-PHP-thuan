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
                <input class="form-control" name="alias" value="{{ $alias }}">
                @if (empty($alias) == true)
                    <p style="color: red">
                        chu co gia tri alias
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label>hot_flag</label>
                <input class="form-control" name="hot_flag" value="{{ $hot_flag }}">
                @if (empty($hot_flag) == true)
                    <p style="color: red">
                        chu co gia tri hot_flag
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label>name</label>
                <input class="form-control" name="name" value="{{ $name }}">
                @if (empty($name) == true)
                    <p style="color: red">
                        chu co gia tri name
                    </p>
                @endif
            </div>
            <button type="submit">gui di</button>
        </form>
    @endsection
