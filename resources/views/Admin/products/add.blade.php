@extends('Admin.layout.index')
@section('noidung')
    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.products.postadd') }}">
        @csrf
        <div class="row">
            <div class="form-group col-lg-6">
                <label>Danh mục san phẩm</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">Chọn danh mục . . .</option>
                    @foreach ($categories as $index => $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label>Tên Sản Phẩm</label>
                <input class="form-control" name="name" placeholder="Nhập Tên Sản Phẩm . . .">
                @error('name')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>Giá gốc</label>
                <input class="form-control" name="original_price" placeholder="Nhập Giá gốc . . .">
                @error('original_price')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label>Giá Khuyễn Mãi</label>
                <input class="form-control" name="promotional_price" placeholder="Nhập Giá Khuyễn Mãi . . .">
                @error('promotional_price')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label>Bài Viết</label>
                <textarea class="form-control" rows="3" name="posts" placeholder="Bài Viết . . ."></textarea>
            </div>
            <div class="form-group col-lg-6">
                <label>picture</label>
                <input type="file" name="picture">
                @error('picture')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit">gui di</button>
    </form>
@endsection
