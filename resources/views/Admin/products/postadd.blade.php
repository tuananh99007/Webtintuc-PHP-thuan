{{-- @extends('Admin.layout.index')
@section('noidung')
    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.products.postadd') }}">
        @csrf
        <div class="row">
            <div class="form-group col-lg-6">
                <label>name</label>
                <input class="form-control" name="name" value="{{$name}}">
                @if (empty($name))
                    <p style="color: red"> chua co name</p>
                @endif
            </div>
            <div class="form-group col-lg-6">
                <label>author</label>
                <input class="form-control" name="author" value="{{$author}}">
                @if (empty($author))
                    <p style="color: red"> chua co author</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>view</label>
                <input class="form-control" name="view" value="{{$view}}">
                @if (empty($view))
                    <p style="color: red"> chua co view</p>
                @endif
            </div>
            <div class="form-group col-lg-6">
                <label>description</label>
                <textarea class="form-control" rows="3" name="description" value="{{$description}}"></textarea>
                @if (empty($description))
                    <p style="color: red"> chua co description</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>cost</label>
                <input class="form-control" name="cost" value="{{$cost}}">
                @if (empty($cost))
                    <p style="color: red"> chua co cost</p>
                @endif
            </div>
            <div class="form-group col-lg-6">
                <label>picture</label>
                <input type="file" name="picture" value="{{$picture}}">
                @if (empty($picture))
                    <p style="color: red"> chua co picture</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>promotional_price</label>
                <input class="form-control" name="promotional_price" value="{{$promotional_price}}">
                @if (empty($promotional_price))
                    <p style="color: red"> chua co promotional_price</p>
                @endif
            </div>
            <div class="form-group col-lg-6">
                <label>evaluate</label>
                <input class="form-control" name="evaluate" value="{{$evaluate}}">
                @if (empty($evaluate))
                    <p style="color: red"> chua co evaluate</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>display_flag</label>
                <input class="form-control" name="display_flag" value="{{$display_flag}}">
                @if (empty($display_flag))
                    <p style="color: red"> chua co display_flag</p>
                @endif
            </div>
            <div class="form-group col-lg-6">
                <label>category_id</label>
                <input class="form-control" name="category_id" value="{{$category_id}}">
                @if (empty($category_id))
                    <p style="color: red"> chua co category_id</p>
                @endif
            </div>
        </div>
        <button type="submit">gui di</button>
    </form>
@endsection --}}
