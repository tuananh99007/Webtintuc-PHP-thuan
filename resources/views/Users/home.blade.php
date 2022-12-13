@extends('users.layouts.index')

@section('main-content')
    <section id="categoryPage" class="desktop" data-id="1942" data-name="Tivi" data-template="cate">
        <div class="container-productbox">
            <ul class="listproduct">
                <!-- Một sản phẩm -->
                @foreach ($productsList as $item => $product)
                    <li class=" item  __cate_1942" data-index="1" data-id="235641" data-issetup="1" data-maingroup="304"
                        data-subgroup="1094" data-type="1" data-vehicle="2" data-productcode="3041094001162"
                        data-price="20000000.0" data-ordertypeid="2" data-pos="1">
                        <a href="https://www.dienmayxanh.com/tivi/qled-4k-samsung-qa50q65a?src=osp" data-s="Nomal"
                            data-site="2" data-pro="3" data-cache="True" data-sv="webdmx-26-91"
                            data-name="Smart Tivi QLED 4K 50 inch Samsung QA50Q65A" data-id="235641" data-price="14700000.0"
                            data-brand="Samsung" data-cate="Tivi" data-box="BoxCate" class="main-contain">

                            <div class="item-label">
                                <span class="lb-tragop">{{$product->category_id}}</span>
                            </div>
                            <div class="item-img item-img_1942">
                                <a href="{{ route('users.products.detail', ['id' => $product->id]) }}">
                                    <img src="{{ asset($product->picture) }}" alt="" border="0"
                                        style="width: 150px" />
                                </a>
                            </div>
                            <p class="result-label temp3">
                                <a href="{{ route('users.products.detail', ['id' => $product->id]) }}">
                                    <img src="{{ asset($product->picture) }}" alt="SINH NHẬT GIẢM SỐC"
                                        data-src="https://cdn.tgdd.vn/2022/07/content/50x50-50x50-10.png"
                                        src="./template_files/50x50-50x50-10.png"><span>SINH NHẬT GIẢM SỐC</span>
                                </a>
                            </p>

                            <h3>
                                <a href="{{ route('users.products.detail', ['id' => $product->id]) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>
                            <p class="item-txt-online">
                                <a href="{{ route('users.products.detail', ['id' => $product->id]) }}">Chi Tiết</a>
                            </p>
                            <div class="box-p">
                                <p class="price-old black">{{ $product->original_price }}</p>
                                <span class="percent"> -{{ percent($product->original_price, $product->promotional_price) }}
                                    %</span>
                            </div>
                            <strong class="price">{{ $product->promotional_price }}</strong>
                            <div class="item-rating">
                                <p>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-dark"></i>
                                </p>
                                <p class="item-rating-total">103</p>
                            </div>

                        </a>
                        <div class="item-bottom">
                            <a href="https://www.dienmayxanh.com/tivi#" class="shiping"></a>
                        </div>


                        <a href="javascript:void(0)" class="item-ss">
                            <i></i>
                            So sánh
                        </a>


                    </li>
                    <!-- Kết thúc Một sản phẩm -->
                @endforeach
            </ul>
        </div>
    </section>
@endsection
