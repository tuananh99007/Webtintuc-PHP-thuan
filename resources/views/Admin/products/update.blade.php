@extends('Admin.layout.index')
@section('noidung')
    <form role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('admin.products.postupdate', ['id' => $product->id]) }}">
        @csrf
        <div class="row">
            <div class="form-group col-lg-6">
                <label>Danh mục sản phẩm</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">Chọn danh mục . . .</option>
                    @foreach ($categories as $index => $category)
                        <option 
                        @selected($product->category_id == $category->id)
                        value="{{ $category->id }}">{{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label>Tên Sản Phẩm</label>
                <input class="form-control" name="name" value="{{$product->name}}" placeholder="Nhập Tên Sản Phẩm . . .">
                @error('name')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>Giá gốc</label>
                <input class="form-control" name="original_price" value="{{$product->original_price}}" placeholder="Nhập Giá gốc . . .">
                @error('original_price')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label>Giá Khuyễn Mãi</label>
                <input class="form-control" name="promotional_price" value="{{$product->promotional_price}}" placeholder="Nhập Giá Khuyễn Mãi . . .">
                @error('promotional_price')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>Bài Viết</label>
                <textarea class="form-control" rows="3" name="posts" value="{{$product->posts}}" placeholder="Bài Viết . . ."></textarea>
            </div>
            <div class="form-group col-lg-6">
                <label>picture</label>
                <img src="{{ asset($product->picture) }}" alt="" style="height: 100px ">
                <input class="form-control" type="file" name="picture" value="{{ $product->picture }} ">
                @error('picture')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit">gui di</button>
    </form>
@endsection
