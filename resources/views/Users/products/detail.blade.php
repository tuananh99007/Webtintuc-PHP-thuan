@extends('users.layouts.index')

@section('main-content')
    <link rel="stylesheet" href="{{ asset('assets/users/css/product.css') }}">

    <section data-id="235792" data-cate-id="1942" class="detail detail_1942 ">
        <h1>{{ $productsDetail->name }}</h1>

        <div class="box02">
            <div class="box02__left">
                <div class="detail-rate">
                    <p>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star-dark"></i>
                    </p>
                    <p class="detail-rate-total">203 <span>đánh giá</span></p>
                </div>
            </div>
        </div>

        <div class="box_main">
            <div class="box_left">
                <div class="box01 ">
                    <div class="box01__show">
                        <div class="show-tab active" data-gallery-id="featured-images-gallery" data-color-id="0">
                            <div class="detail-slider owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer owl-height" style="height: 396.75px;">
                                    <div class="owl-stage">
                                        <div class="owl-item active" style="width: 710px;"><a href="javascript:void(0)"
                                                class="slider-item video-item" data-gallery-id="featured-images-gallery"
                                                data-color-id="0" data-picture-id="211564" data-video-id="3TJP5iciTYg"
                                                data-index="0" data-time="0">
                                                <img src="{{ asset($productsDetail->picture) }}" alt=""
                                                    width="710" height="394">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="total-imgslider">

                                <a class="note s7 hide"
                                    href="https://www.dienmayxanh.com/kinh-nghiem-hay/cac-cong-nghe-noi-bat-cua-tivi-samsung-20-1339340?src=slider#q-symphony"
                                    target="_blank"><span>Tìm hiểu:</span> Q-Symphony</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article content-t-wrap">
                    <div class="article__content short">

                        <h3 class="article__content__title">Thông tin sản phẩm</h3>
                        <div class="content-article">
                            <h3>Trải nghiệm xem thêm nhập vai với màn hình 55 inch không viền 3 cạnh</h3>
                            <p><a href="https://www.dienmayxanh.com/tivi/led-4k-samsung-ua55au8100" target="_blank"
                                    title="Smart Tivi Samsung 4K 55 inch UA55AU8100 "> {{ $productsDetail->name }} </a>thiết kế theo phong cách AirSlim tối giản với các cạnh viền siêu mỏng tạo
                                cảm giác màn hình không hề bị giới hạn. Tivi có 2 chân đế hình chữ V úp ngược giúp trụ vững
                                trên tất cả mặt phẳng, bạn cũng có thể treo tivi lên tường để tiết kiệm không gian.</p>
                            <p>Màn hình <a href="https://www.dienmayxanh.com/tivi-samsung?g=55-inch" target="_blank"
                                    title="Xem thêm tivi Samsung 55 inch tại dienmayxanh">tivi Samsung 55 inch </a>phù hợp
                                cho các căn phòng có diện tích vừa phải như phòng khách, phòng ngủ, văn phòng,...</p>
                        </div>

                    </div>
                </div>
                <div class="border7"></div>
            </div>
            <div class="box_right">
                <div class="box04 box_normal">
                    <div class="price-one">
                        <div class="box-price">
                            <p class="box-price-present black">Giá gốc: {{ $productsDetail->original_price }} VND</p>
                        </div>
                    </div>
                    <div class="giamsoc-ol">
                        <p class="giamsoc-ol__top">
                            Khuyến mãi -{{ percent($productsDetail->original_price, $productsDetail->promotional_price) }}
                            %
                        </p>
                        <div class="giamsoc-ol__bottom">
                            <p class="giamsoc-ol-price">{{ $productsDetail->promotional_price }} VND </p>
                        </div>
                    </div>
                    <div class="block block-price1">
                        <div class="block-button normal">
                            <a href="{{route('users.components.carts',['product_id'=>$productsDetail->id])}}" class="btn-buynow jsBuy">MUA NGAY</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
