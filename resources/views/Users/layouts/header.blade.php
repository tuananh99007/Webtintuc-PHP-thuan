<header class="header header-v2  " data-sub="0">
    <div class="header__top">
        <div>
            <a href="https://www.dienmayxanh.com/" class="header__logo">
                <i class="iconnewglobal-logoheaddmx"></i>
            </a>

            <a href="javascript:void(0)" class="header__address" onclick="OpenLocation()">
                Xem giá, tồn kho tại:
                <span data-province="3" data-district="0" data-ward="0">Hồ Chí Minh</span>
            </a>
            <form onsubmit="return suggestSearch(event);" class="header__search">
                <input id="skw" type="text" class="input-search" onkeyup="suggestSearch(event);"
                    placeholder="Bạn tìm gì..." name="key" autocomplete="off" maxlength="100">
                <button type="submit">
                    <i class="icon-search"></i>
                </button>
                <div id="search-result" style="display: none;"></div>
            </form>
            <a href="https://www.dienmayxanh.com/lich-su-mua-hang" class="name-order">
                Lịch sử đơn hàng
            </a>
            <a href="{{route('users.components.cartdetail')}}" class="header__cart" id="cart-box">
                <div class="box-cart">
                    <i class="iconnewglobal-whitecart"></i>
                    <span class="cart-number has-cart">{{ $amount }}</span>
                </div>
            </a>
            <div class="header__listtop">
                <div class="divitem">
                    <a href="https://www.dienmayxanh.com/kinh-nghiem-hay">Tư vấn<br>chọn mua</a>
                </div>
                <div class="bordercol"></div>
                <div class="divitem">
                    <a href="https://www.dienmayxanh.com/khuyen-mai">Khuyến mãi</a>
                </div>
                <div class="bordercol"></div>
                <div class="divitem">
                    <a href="https://www.dienmayxanh.com/vao-bep">Vào bếp</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__main">
        <div>
            <ul class="main-menu-header">
                <li class="category">
                    <i class="iconnewglobal-whitemenu"></i>
                    <a href="https://www.dienmayxanh.com/danh-muc-nhom-hang" class="category__all">Tất cả danh
                        mục</a>
                    <div class="bar-top-left" style="display: none;">
                        <ul class="main-menu">
                            <li data-submenu-id="submenu-1" class="">
                                <div class="dropdown">
                                    <span>
                                        <img src="./template_files/LabelHOT.png" alt="label hot" width="26">
                                    </span>
                                    <a href="https://www.dienmayxanh.com/tivi" class="">Tivi</a>, <a
                                        href="https://www.dienmayxanh.com/loa-ldp" class="">Loa, Dàn Karaoke</a>
                                </div>
                                <div id="submenu-1" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">TIVI <a href="https://www.dienmayxanh.com/tivi"
                                                class="">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/tivi-tra-gop-0-phan-tram"
                                            class="">Tivi
                                            trả góp 0 - 1%</a>
                                        <a href="https://www.dienmayxanh.com/tivi-sony" class="">Sony</a>
                                        <a href="https://www.dienmayxanh.com/tivi-samsung" class="">Samsung</a>
                                        <a href="https://www.dienmayxanh.com/tivi-lg" class="">LG</a>
                                        <a href="https://www.dienmayxanh.com/tivi-tcl" class="">TCL</a>
                                        <a href="https://www.dienmayxanh.com/tivi-casper" class="">Casper</a>
                                        <a href="https://www.dienmayxanh.com/tivi#c=1942&amp;p=43170,43356,43358&amp;pi=0"
                                            class="">Từ 32 - 43 inch</a>
                                        <a href="https://www.dienmayxanh.com/tivi#c=1942&amp;p=43358,44869,45198,43361,43364&amp;pi=0"
                                            class="">Từ 43 - 55 inch</a>
                                        <a href="https://www.dienmayxanh.com/tivi#c=1942&amp;r=335,333&amp;pi=0"
                                            class="">Dưới 7 triệu</a>
                                        <a href="https://www.dienmayxanh.com/tivi#c=1942&amp;r=711,576&amp;pi=0"
                                            class="">Tivi cao cấp</a>
                                        <a href="https://www.dienmayxanh.com/may-chieu" class="">Máy chiếu</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">LOA, ÂM THANH <a
                                                href="https://www.dienmayxanh.com/loa-ldp" class="">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd?g=loa-keo" class="">Loa
                                            kéo</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-loa-bluetooth"
                                            class="">Loa
                                            Bluetooth</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-loa-thanh" class="">Loa
                                            thanh (Soundbar)</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd?g=dan-am-thanh"
                                            class="">Dàn âm thanh</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-dan-karaoke-amply"
                                            class="">Dàn Karaoke, Amply</a>
                                        <a href="https://www.dienmayxanh.com/micro" class="">Micro</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-sony" class="">Loa
                                            Sony</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-nanomax" class="">Loa
                                            Nanomax</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-samsung" class="">Loa
                                            Samsung</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-jbl" class="">Loa
                                            JBL</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-lg" class="">Loa LG</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">PHỤ KIỆN TIVI</p>
                                        <a href="https://www.dienmayxanh.com/cap-hdmi-cap-tivi" class="">Cáp
                                            HDMI,
                                            cáp Tivi</a>
                                        <a href="https://www.dienmayxanh.com/khung-treo-tivi" class="">Khung
                                            treo
                                            Tivi</a>
                                        <a href="https://www.dienmayxanh.com/dieu-khien-tivi" class="">Điều
                                            khiển
                                            TV</a>
                                        <a href="https://www.dienmayxanh.com/android-tv-box" class="">Android TV
                                            Box</a>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-2">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-tulanh"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/tu-lanh">Tủ lạnh</a>, <a
                                        href="https://www.dienmayxanh.com/tu-dong">Tủ đông, Tủ mát</a>
                                </div>

                                <div id="submenu-2" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">TỦ LẠNH<a
                                                href="https://www.dienmayxanh.com/tu-lanh">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/tu-lanh-tra-gop-0-phan-tram">Trả góp 0
                                            - 0.5%</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh?g=tu-150-300-lit">Tủ lạnh từ
                                            150 - 300 lít</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh?g=tu-301-400-lit">Tủ lạnh từ
                                            301 - 400 lít</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh?g=tu-lon-side-by-side">Tủ lạnh
                                            Side by side</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh?g=mini">Tủ lạnh Mini</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh-panasonic">Panasonic</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh-samsung">Samsung</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh-toshiba">Toshiba</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh-aqua-sanyo">Aqua</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh-lg">LG</a>
                                        <a href="https://www.dienmayxanh.com/tu-lanh?p=tu-8tr-12tr">Từ 8 - 12
                                            triệu</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">TỦ ĐÔNG, TỦ MÁT<a
                                                href="https://www.dienmayxanh.com/tu-dong">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/tu-dong-sanaky">Sanaky</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong-kangaroo">Kangaroo</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong-aqua">AQUA</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong-lg">LG</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong-sunhouse">Sunhouse</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong-hoa-phat">Hoà Phát</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong?g=1-ngan-dong-1-ngan-mat">Tủ 1
                                            ngăn đông, một ngăn mát</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong?g=1-ngan-dong">Tủ 1 ngăn
                                            đông</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong-inverter">Tủ đông có
                                            Inverter</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong?p=tu-5-10-trieu">Tủ đông 5 - 10
                                            triệu</a>
                                        <a href="https://www.dienmayxanh.com/tu-dong?g=duoi-300-lit">Tủ đông dưới
                                            300 lít</a>

                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-3">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-maygiat"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/may-giat">Máy giặt</a>,
                                    <a href="https://www.dienmayxanh.com/may-say-quan-ao">Sấy quần áo</a>
                                </div>


                                <div id="submenu-3" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">MÁY GIẶT<a
                                                href="https://www.dienmayxanh.com/may-giat">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/may-giat-moi">Đời mới 2022</a>
                                        <a href="https://www.dienmayxanh.com/may-giat-toshiba">Toshiba</a>
                                        <a href="https://www.dienmayxanh.com/may-giat-lg">LG</a>
                                        <a href="https://www.dienmayxanh.com/may-giat-panasonic">Panasonic</a>
                                        <a href="https://www.dienmayxanh.com/may-giat-samsung">Samsung</a>
                                        <a href="https://www.dienmayxanh.com/may-giat-electrolux">Electrolux</a>
                                        <a href="https://www.dienmayxanh.com/may-giat-aqua-sanyo">Aqua</a>
                                        <a href="https://www.dienmayxanh.com/may-giat?g=cua-truoc">Máy giặt cửa
                                            ngang (cửa trước)</a>
                                        <a href="https://www.dienmayxanh.com/may-giat-co-say">Máy giặt sấy</a>
                                        <a href="https://www.dienmayxanh.com/may-giat?p=duoi-5-trieu">Giá dưới 5
                                            triệu</a>

                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">MÁY SẤY QUẦN ÁO<a
                                                href="https://www.dienmayxanh.com/may-say-quan-ao">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/may-say-quan-ao?p=tu-5tr-10tr">Giá từ 5
                                            - 10 triệu</a>
                                        <a href="https://www.dienmayxanh.com/may-say-quan-ao-electrolux">Electrolux</a>
                                        <a href="https://www.dienmayxanh.com/may-say-quan-ao-beko">Beko</a>
                                        <a href="https://www.dienmayxanh.com/may-say-quan-ao-candy">Candy</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">PHỤ KIỆN MÁY GIẶT</p>
                                        <a href="https://www.dienmayxanh.com/ao-trum-may-giat">Áo trùm máy giặt</a>
                                        <a href="https://www.dienmayxanh.com/gia-do-may-giat">Giá đỡ máy giặt</a>
                                        <a href="https://www.dienmayxanh.com/tui-giat">Túi giặt</a>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-4">
                                <div class="dropdown">
                                    <span>
                                        <!--                    <i class="icon-maylanh"></i>
            <label class="hot maylanhs">HOT</label>-->
                                        <img src="./template_files/LabelHOT.png" alt="label hot" width="26">
                                    </span>
                                    <a href="https://www.dienmayxanh.com/may-lanh">Máy lạnh</a>, <a
                                        href="https://www.dienmayxanh.com/quat-dieu-hoa">Quạt điều hoà</a>
                                </div>

                                <div id="submenu-4" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">MÁY LẠNH<a
                                                href="https://www.dienmayxanh.com/may-lanh">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/may-lanh-tra-gop-0-phan-tram">Trả góp 0
                                            - 0.5%</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-moi">Đời mới 2022</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-panasonic">Panasonic</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-daikin">Daikin</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-samsung">Samsung</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-lg">LG</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-casper">Casper</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-nagakawa">Nagakawa</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-toshiba">Toshiba</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh-sharp">Sharp</a>
                                        <a href="https://www.dienmayxanh.com/may-lanh?g=1-hp">Máy lạnh 1 HP</a>
                                        <a href="https://www.dienmayxanh.com/may-doi-tra/may-lanh">Máy đã qua sử
                                            dụng</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">QUẠT ĐIỀU HÒA<a
                                                href="https://www.dienmayxanh.com/quat-dieu-hoa">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa-kangaroo">Kangaroo</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa-daikiosan">Daikiosan</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa-sunhouse">Sunhouse</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa-midea">Midea</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa-delites">Delites</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa?p=tu-1-3-trieu">Từ 1 đến
                                            3 triệu</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa?p=tu-3-5-trieu">Từ 3 đến
                                            5 triệu</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa?g=duoi-20-m">Quạt mát
                                            dưới 20 m²</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa?g=tu-20-34-m">Quạt mát từ
                                            20 - 34 m²</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa?g=tu-35-50-m">Quạt mát từ
                                            35 - 50 m²</a>
                                        <a href="https://www.dienmayxanh.com/quat-dieu-hoa?g=tren-50-m">Quạt mát
                                            trên 50 m²</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">QUẠT<a href="https://www.dienmayxanh.com/quat">Xem
                                                tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/quat?g=quat-treo-tuong">Quạt treo
                                            tường</a>
                                        <a href="https://www.dienmayxanh.com/quat?g=quat-sac-dien">Quạt sạc điện</a>
                                        <a href="https://www.dienmayxanh.com/quat?g=quat-dung">Quạt đứng</a>
                                        <a href="https://www.dienmayxanh.com/quat?g=quat-hop">Quạt hộp</a>
                                        <a href="https://www.dienmayxanh.com/quat?g=quat-lung">Quạt lửng</a>
                                        <a href="https://www.dienmayxanh.com/quat-ban">Quạt bàn</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">MÁY NƯỚC NÓNG <a
                                                href="https://www.dienmayxanh.com/may-nuoc-nong">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong?g=lam-nong-truc-tiep">Máy
                                            nước nóng trực tiếp</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-nang-luong-mat-troi">Máy
                                            nước nóng năng lượng mặt trời</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-lam-nong-gian-tiep">Máy
                                            nước nóng gián tiếp</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-bom-tro-luc">Máy có bơm
                                            trợ lực</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-ariston">Ariston</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-panasonic">Panasonic</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-ferroli">Ferroli</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-electrolux">Electrolux</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-kangaroo">Kangaroo</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-beko">Beko</a>
                                        <a href="https://www.dienmayxanh.com/may-nuoc-nong-rossi">Rossi</a>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-5">
                                <div class="dropdown">
                                    <span><i class="icon-diengiadung"></i></span>
                                    <a href="https://www.dienmayxanh.com/gia-dung">Điện gia dụng</a>,
                                    <a href="https://www.dienmayxanh.com/noi-chien-khong-dau">Nồi chiên</a>
                                </div>
                                <div id="submenu-5" class="submenu" style="display: none;">
                                    <aside class="w140">
                                        <div class="menuitem">
                                            <p class="menuitem__title">NỒI CÁC LOẠI</p>
                                            <a href="https://www.dienmayxanh.com/noi-com-dien">Nồi cơm điện</a>
                                            <a href="https://www.dienmayxanh.com/noi-ap-suat">Nồi áp suất</a>
                                            <a href="https://www.dienmayxanh.com/lau-dien">Nồi lẩu điện</a>
                                            <a href="https://www.dienmayxanh.com/noi-chien-khong-dau">Nồi chiên
                                                không dầu</a>

                                        </div>
                                        <div class="menuitem">
                                            <p class="menuitem__title">MÁY XAY - VẮT - ÉP</p>
                                            <a href="https://www.dienmayxanh.com/may-xay-sinh-to">Máy xay sinh
                                                tố</a>
                                            <a href="https://www.dienmayxanh.com/may-xay-sinh-to-may-xay-thit">Máy
                                                xay thịt</a>
                                            <a href="https://www.dienmayxanh.com/may-lam-sua-hat">Máy làm sữa
                                                hạt</a>
                                            <a href="https://www.dienmayxanh.com/may-ep-trai-cay">Máy ép trái
                                                cây</a>
                                            <a href="https://www.dienmayxanh.com/may-ep-trai-cay?g=may-ep-cham">Máy
                                                ép chậm</a>
                                            <a href="https://www.dienmayxanh.com/may-vat-cam">Máy vắt cam</a>
                                            <a href="https://www.dienmayxanh.com/may-danh-trung">Máy đánh trứng</a>
                                        </div>
                                    </aside>
                                    <aside class="w160">
                                        <div class="menuitem">
                                            <p class="menuitem__title">LÒ</p>
                                            <a href="https://www.dienmayxanh.com/lo-nuong">Lò nướng</a>
                                            <a href="https://www.dienmayxanh.com/lo-vi-song">Lò vi sóng</a>
                                        </div>
                                        <div class="menuitem">
                                            <p class="menuitem__title">THIẾT BỊ NHÀ BẾP</p>
                                            <p class="many-cate">
                                                <a href="https://www.dienmayxanh.com/binh-dun-sieu-toc">Bình đun,
                                                </a>
                                                <a href="https://www.dienmayxanh.com/binh-thuy-dien">Bình thủy
                                                    điện</a>
                                            </p>
                                            <a href="https://www.dienmayxanh.com/may-pha-ca-phe">Máy pha cà phê</a>
                                            <a href="https://www.dienmayxanh.com/may-hut-mui">Máy hút mùi</a>
                                            <a href="https://www.dienmayxanh.com/may-rua-chen">Máy rửa chén</a>
                                        </div>
                                    </aside>
                                    <aside class="w175">
                                        <div class="menuitem">
                                            <p class="menuitem__title">ĐIỆN GIA DỤNG</p>
                                            <a href="https://www.dienmayxanh.com/ban-ui">Bàn ủi</a>
                                            <a href="https://www.dienmayxanh.com/quat">Quạt</a>
                                            <a href="https://www.dienmayxanh.com/quat-dieu-hoa">Quạt điều hòa</a>
                                            <a href="https://www.dienmayxanh.com/may-loc-khong-khi">Máy lọc không
                                                khí</a>
                                            <p class="many-cate">
                                                <a href="https://www.dienmayxanh.com/may-hut-bui">Máy hút bụi, </a>
                                                <a href="https://www.dienmayxanh.com/robot-hut-bui"> Robot hút
                                                    bụi</a>
                                            </p>
                                            <p class="many-cate">
                                                <a href="https://www.dienmayxanh.com/den-dien-den-sac-den-ban-hoc">Đèn
                                                    bàn, </a>
                                                <a href="https://www.dienmayxanh.com/den-dien-den-sac-den-pin">Đèn
                                                    pin, </a>
                                                <a href="https://www.dienmayxanh.com/den-dien-den-sac-den-sac"> Đèn
                                                    sạc</a>
                                            </p>
                                            <a href="https://www.dienmayxanh.com/den-dien-den-sac-den-bat-muoi">Đèn
                                                bắt muỗi</a>
                                            <a href="https://www.dienmayxanh.com/vot-muoi">Vợt muỗi</a>
                                            <a href="https://www.dienmayxanh.com/o-cam-phich-cam">Ổ cắm điện</a>
                                            <p class="menuitem__title">THIẾT BỊ SƯỞI ẤM</p>
                                            <a href="https://www.dienmayxanh.com/quat-suoi">Quạt sưởi</a>
                                            <a href="https://www.dienmayxanh.com/den-suoi">Đèn sưởi</a>
                                        </div>
                                    </aside>
                                    <!--<aside class="w190">
        <div class="menuitem">
            <p class="menuitem__title">CHĂM SÓC SỨC KHỎE</p>
            <a href="/may-khi-dung">Máy khí dung</a>
            <p class="many-cate">
                <a href="/may-do-huyet-ap">Máy đo huyết áp</a>
                <a href="/nhiet-ke">Nhiệt kế</a>
            </p>
            <a href="/can-suc-khoe">Cân sức khỏe</a>
            <a href="/may-chay-bo">Máy chạy bộ </a>
            <a href="/xe-dap-tap-the-duc">Xe đạp tập thể dục</a>
            <a href="/ghe-massage">Ghế massage</a>
        </div>-->
                                    <!--</aside>-->
                                    <!--<aside>
                <div class="menuitem">
                    <p class="menuitem__title">DỤNG CỤ SỬA CHỮA</p>
                    <p class="many-cate">
                        <a href="/may-khoan">Máy khoan, </a>
                        <a href="/mui-khoan">Mũi khoan</a>
                    </p>
                    <p class="many-cate">
                        <a href="/may-mai-goc">Máy cắt, </a>
                        <a href="/may-mai">Máy mài</a>-->
                                    <!--</p>
                    <a href="/bo-dung-cu-da-nang">Bộ dụng cụ đa năng</a>
                    <p class="many-cate">
                        <a href="/co-le-mo-let">Cờ lê - mỏ lết, </a>
                        <a href="/tua-vit">Tua vít</a>
                    </p>
                    <p class="many-cate">
                        <a href="/kim">Kìm, </a>
                        <a href="/bua">Búa, </a>
                        <a href="/thuoc-do">Thước đo - cân cầm tay</a>
                    </p>
                    <a href="/may-do-khoang-cach">Máy đo khoảng cách</a>
                    <p class="many-cate">
                        <a href="/o-khoa">Ổ khóa,</a>
                        <a href="/khoa-dien-tu">Khoá điện tử</a>
                    </p>-->
                                    <!--</div>
                <div class="menuitem">
                    <p class="menuitem__title">THIẾT BỊ ĐIỆN NƯỚC</p>
                    <a href="/may-bom-nuoc">Máy bơm nước</a>
                    <a href="/may-rua-xe">Máy rửa xe</a>
                    <a href="/on-ap">Ổn áp</a>
                </div>
            </aside>-->
                                </div>
                            </li>
                            <li data-submenu-id="submenu-6">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-nhabep"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/do-dung-gia-dinh">Đồ dùng nhà bếp</a>,
                                    <a href="https://www.dienmayxanh.com/bep-dien">Bếp điện</a>
                                </div>
                                <div id="submenu-6" class="submenu" style="display: none;">
                                    <aside>
                                        <div class="menuitem">
                                            <p class="menuitem__title">BẾP</p>
                                            <a href="https://www.dienmayxanh.com/bep-ga">Bếp ga</a>
                                            <a href="https://www.dienmayxanh.com/bep-tu">Bếp từ</a>
                                            <a href="https://www.dienmayxanh.com/bep-hong-ngoai">Bếp hồng ngoại</a>
                                            <a href="https://www.dienmayxanh.com/lo-nuong?g=bep-nuong-dien">Bếp
                                                nướng điện</a>
                                        </div>
                                        <div class="menuitem">
                                            <p class="menuitem__title">VỆ SINH NHÀ CỬA</p>
                                            <a href="https://www.dienmayxanh.com/bo-lau-nha">Bộ lau nhà</a>
                                            <a href="https://www.dienmayxanh.com/moc-kep-quan-ao">Kẹp, móc quần
                                                áo</a>
                                            <a href="https://www.dienmayxanh.com/phu-kien-may-giat">Phụ kiện máy
                                                giặt</a>
                                            <a href="https://www.dienmayxanh.com/ve-sinh-nha-cua">Vệ sinh nhà
                                                cửa</a>
                                        </div>
                                    </aside>
                                    <aside class="w355">
                                        <div class="menuitem">
                                            <p class="menuitem__title">NHÀ BẾP</p>
                                            <div class="menuitem__wrap">
                                                <div class="item-small">
                                                    <a href="https://www.dienmayxanh.com/noi">Nồi, bộ nồi</a>
                                                    <a href="https://www.dienmayxanh.com/chao-chong-dinh">Chảo chống
                                                        dính</a>
                                                    <a href="https://www.dienmayxanh.com/dao-keo-thot">Dao, kéo,
                                                        thớt</a>
                                                    <p class="many-cate">
                                                        <a href="https://www.dienmayxanh.com/hop-dung-thuc-pham">Hộp,
                                                        </a>
                                                        <a href="https://www.dienmayxanh.com/hu-dung-thuc-pham">Hũ
                                                            đựng thực phẩm</a>
                                                    </p>
                                                    <a href="https://www.dienmayxanh.com/hop-ham-com">Hộp hâm
                                                        cơm</a>
                                                    <a href="https://www.dienmayxanh.com/thau-ro-gao-nuoc">Thau,
                                                        rổ</a>
                                                    <a href="https://www.dienmayxanh.com/va-san">Vá, Sạn</a>
                                                    <a href="https://www.dienmayxanh.com/thung-da-ca-da">Thùng đá,
                                                        ca đá</a>
                                                </div>
                                                <div class="item-small">
                                                    <a href="https://www.dienmayxanh.com/dung-cu-kep-gap">Dụng cụ
                                                        kẹp gắp</a>
                                                    <a href="https://www.dienmayxanh.com/dung-cu-lam-banh">Dụng cụ
                                                        làm bánh</a>
                                                    <a href="https://www.dienmayxanh.com/vi-thung-nuong">Vỉ, thùng
                                                        nướng</a>
                                                    <a href="https://www.dienmayxanh.com/khay-da-ly-lam-da">Khay, ly
                                                        làm đá</a>
                                                    <a href="https://www.dienmayxanh.com/phu-kien-nha-bep">Phụ kiện
                                                        nhà bếp</a>
                                                    <a href="https://www.dienmayxanh.com/ke">Khay, kệ đựng đồ</a>
                                                    <a href="https://www.dienmayxanh.com/voi-rua-chen">Vòi rửa
                                                        chén</a>
                                                    <a href="https://www.dienmayxanh.com/chau-rua-chen">Chậu rửa
                                                        chén</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menuitem">
                                            <div class="menuitem__wrap">
                                                <div class="item-small">
                                                    <p class="menuitem__title">THIẾT BỊ KHÁC</p>
                                                    <a href="https://www.dienmayxanh.com/mu-bao-hiem">Mũ bảo
                                                        hiểm</a>
                                                    <a href="https://www.dienmayxanh.com/ket-sat">Két sắt</a>
                                                </div>
                                                <div class="item-small">
                                                    <p class="menuitem__title">THIẾT BỊ PHÒNG TẮM</p>
                                                    <a href="https://www.dienmayxanh.com/nap-bon-cau">Nắp bồn
                                                        cầu</a>
                                                    <a href="https://www.dienmayxanh.com/voi-xit-ve-sinh">Vòi xịt vệ
                                                        sinh</a>
                                                    <a href="https://www.dienmayxanh.com/voi-sen">Vòi sen</a>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                    <aside>
                                        <div class="menuitem">
                                            <p class="menuitem__title">CHĂM SÓC MẸ VÀ BÉ <a
                                                    href="https://www.dienmayxanh.com/cham-soc-me-va-be">Xem tất
                                                    cả</a></p>
                                            <a href="https://www.dienmayxanh.com/may-hut-sua">Máy hút sữa</a>
                                            <a href="https://www.dienmayxanh.com/may-ham-sua">Máy hâm sữa</a>
                                            <a href="https://www.dienmayxanh.com/may-tiet-trung-binh-sua">Máy tiệt
                                                trùng</a>
                                            <a href="https://www.dienmayxanh.com/num-ti">Núm ti</a>
                                            <a href="https://www.dienmayxanh.com/ti-gia">Ti giả</a>
                                            <a href="https://www.dienmayxanh.com/num-tro-ti">Núm trợ ti</a>
                                        </div>
                                        <div class="menuitem">
                                            <p class="menuitem__title">PHÒNG ĂN</p>
                                            <a href="https://www.dienmayxanh.com/binh-dung-nuoc">Bình đựng nước</a>
                                            <a href="https://www.dienmayxanh.com/binh-ly-giu-nhiet">Bình, ly giữ
                                                nhiệt</a>
                                            <a href="https://www.dienmayxanh.com/chen-bat">Tô, chén, dĩa</a>
                                            <a href="https://www.dienmayxanh.com/muong-dua">Đũa - Muỗng</a>
                                            <a href="https://www.dienmayxanh.com/ly-bo-ly">Ly, bộ ly</a>
                                            <a href="https://www.dienmayxanh.com/bo-am-tra">Bộ ấm trà</a>
                                        </div>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-7">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-locnuoc"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/may-loc-nuoc-ldp">Lọc nước</a>,
                                    <a href="https://www.dienmayxanh.com/may-xay-sinh-to">Sinh tố</a>,
                                    <a href="https://www.dienmayxanh.com/may-ep-trai-cay">Xay ép</a>
                                </div>

                                <div id="submenu-7" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">LỌC NƯỚC</p>
                                        <a href="https://www.dienmayxanh.com/may-loc-nuoc?g=tu-dung">Máy lọc nước RO
                                            tủ đứng</a>
                                        <a href="https://www.dienmayxanh.com/may-loc-nuoc?g=lap-am">Máy lọc nước RO
                                            âm tủ</a>
                                        <a href="https://www.dienmayxanh.com/may-loc-nuoc?g=de-ban">Máy lọc nước RO
                                            để bàn</a>
                                        <a href="https://www.dienmayxanh.com/may-loc-nuoc?g=ion-am-tao-kiem">Máy lọc
                                            nước ion kiềm</a>
                                        <a href="https://www.dienmayxanh.com/loc-nuoc-khong-dien">Lọc nước không
                                            điện</a>
                                        <a href="https://www.dienmayxanh.com/loi-may-loc-nuoc">Lõi máy lọc nước</a>
                                        <a href="https://www.dienmayxanh.com/coc-loc-nuoc">Cốc lọc đầu nguồn</a>
                                        <a href="https://www.dienmayxanh.com/but-thu-nuoc">Bút thử nước</a>
                                        <a href="https://www.dienmayxanh.com/cay-nuoc-nong-lanh">Cây nước nóng
                                            lạnh</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">Máy xay sinh tố <a
                                                href="https://www.dienmayxanh.com/may-xay-sinh-to">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/may-xay-sinh-to?g=may-xay-sinh-to">Máy
                                            xay sinh tố</a>
                                        <a href="https://www.dienmayxanh.com/may-xay-sinh-to?g=may-xay-cam-tay">Máy
                                            xay cầm tay</a>
                                        <a href="https://www.dienmayxanh.com/may-xay-sinh-to-may-xay-thit">Máy xay
                                            thịt</a>
                                        <a href="https://www.dienmayxanh.com/may-xay-sinh-to?g=may-xay-da-nang">Máy
                                            xay đa năng</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">Máy ép trái cây <a
                                                href="https://www.dienmayxanh.com/may-ep-trai-cay">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/may-ep-trai-cay?g=may-ep-cham">Máy ép
                                            chậm</a>
                                        <a href="https://www.dienmayxanh.com/may-ep-trai-cay?g=may-ep-trai-cay">Máy
                                            ép nhanh</a>
                                        <a href="https://www.dienmayxanh.com/may-ep-trai-cay-may-xay-ep-da-nang">Máy
                                            xay ép đa năng</a>
                                        <a href="https://www.dienmayxanh.com/may-vat-cam">Máy vắt cam</a>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-14" class="label-news">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-suckhoe"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/thiet-bi-cham-soc-suc-khoe">Sức khoẻ</a>,
                                    <a href="https://www.dienmayxanh.com/thiet-bi-lam-dep">Làm đẹp <span
                                            class="menuitem_label">Mới</span></a>
                                </div>

                                <div id="submenu-14" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">Chăm sóc sức khoẻ <a
                                                href="https://www.dienmayxanh.com/thiet-bi-cham-soc-suc-khoe">Xem
                                                tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/may-khi-dung">Máy khí dung</a>
                                        <a href="https://www.dienmayxanh.com/may-do-huyet-ap">Máy đo huyết áp</a>
                                        <a href="https://www.dienmayxanh.com/nhiet-ke">Nhiệt kế</a>
                                        <a href="https://www.dienmayxanh.com/can-suc-khoe">Cân sức khoẻ</a>
                                        <a href="https://www.dienmayxanh.com/may-chay-bo">Máy chạy bộ</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-tap-the-duc">Xe đạp tập thể
                                            dục</a>
                                        <a href="https://www.dienmayxanh.com/ghe-massage">Ghế massage</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">Thiết bị làm đẹp <a
                                                href="https://www.dienmayxanh.com/thiet-bi-lam-dep">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/may-say-toc">Máy sấy tóc</a>
                                        <a href="https://www.dienmayxanh.com/may-tao-kieu-toc">Máy tạo kiểu tóc</a>
                                        <a href="https://www.dienmayxanh.com/may-cao-rau">Máy cạo râu</a>
                                        <a href="https://www.dienmayxanh.com/may-massage">Máy massage</a>
                                        <a href="https://www.dienmayxanh.com/may-rua-mat">Máy rửa mặt</a>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-15">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-suachua"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/dung-cu-cam-tay">Dụng cụ gia đình</a>
                                </div>

                                <div id="submenu-15" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">Thiết bị điện nước <a
                                                href="https://www.dienmayxanh.com/thiet-bi-dien-nuoc">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/may-bom-nuoc">Máy bơm nước</a>
                                        <a href="https://www.dienmayxanh.com/may-rua-xe">Máy rửa xe</a>
                                        <a href="https://www.dienmayxanh.com/on-ap">Ổn áp</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">Dụng cụ sửa chữa <a
                                                href="https://www.dienmayxanh.com/dung-cu-cam-tay">Xem tất cả</a>
                                        </p>
                                        <p class="many-cate">
                                            <a href="https://www.dienmayxanh.com/may-khoan">Máy khoan, </a>
                                            <a href="https://www.dienmayxanh.com/mui-khoan">mũi khoan</a>
                                        </p>
                                        <p class="many-cate">
                                            <a href="https://www.dienmayxanh.com/may-mai-goc">Máy cắt, </a>
                                            <a href="https://www.dienmayxanh.com/may-mai">Máy mài</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/bo-dung-cu-da-nang">Bộ dụng cụ đa
                                            năng</a>
                                        <p class="many-cate">
                                            <a href="https://www.dienmayxanh.com/co-le-mo-let">Cờ lê - mỏ lết, </a>
                                            <a href="https://www.dienmayxanh.com/tua-vit">Tua vít</a>
                                        </p>
                                        <p class="many-cate">
                                            <a href="https://www.dienmayxanh.com/kim">Kìm, </a>
                                            <a href="https://www.dienmayxanh.com/bua">Búa</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/thuoc-do">Thước đo, cân cầm tay</a>
                                        <a href="https://www.dienmayxanh.com/may-do-khoang-cach">Máy đo khoảng cách
                                        </a>
                                        <p class="many-cate">
                                            <a href="https://www.dienmayxanh.com/o-khoa">Ổ khoá, </a>
                                            <a href="https://www.dienmayxanh.com/khoa-dien-tu">Khoá điện tử</a>
                                        </p>
                                    </aside>
                                </div>
                            </li>

                            <li data-submenu-id="submenu-8">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-dienthoai"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/dien-thoai">Điện thoại</a>,
                                    <a href="https://www.dienmayxanh.com/laptop-ldp">Laptop</a>,
                                    <a href="https://www.dienmayxanh.com/may-tinh-bang">Tablet</a>
                                </div>

                                <div id="submenu-8" class="submenu" style="display: none;">
                                    <aside class="w160">
                                        <p class="menuitem__title">ĐIỆN THOẠI<a
                                                href="https://www.dienmayxanh.com/dien-thoai">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/dien-thoai-apple-iphone">iPhone</a>
                                        <a href="https://www.dienmayxanh.com/dien-thoai-samsung">Samsung</a>
                                        <a href="https://www.dienmayxanh.com/dien-thoai-oppo">Oppo</a>
                                        <a href="https://www.dienmayxanh.com/dien-thoai-xiaomi">Xiaomi</a>
                                        <a href="https://www.dienmayxanh.com/dien-thoai?p=tu-2-4-trieu">Điện thoại
                                            từ 2 - 4 triệu</a>
                                        <a href="https://www.dienmayxanh.com/dien-thoai?p=tu-4-7-trieu">Điện thoại
                                            từ 4 - 7 triệu</a>
                                        <a href="https://www.dienmayxanh.com/dien-thoai#c=42&amp;r=252,253&amp;pi=0">Điện
                                            thoại trên 13 triệu</a>
                                        <a href="https://www.dienmayxanh.com/may-doi-tra/dien-thoai">Điện thoại cũ
                                            giá rẻ</a>
                                        <a href="https://www.dienmayxanh.com/dien-thoai-tra-gop-0-phan-tram">Điện
                                            thoại trả góp 0-1%</a>
                                    </aside>
                                    <aside class="w160">
                                        <p class="menuitem__title">LAPTOP<a
                                                href="https://www.dienmayxanh.com/laptop-ldp">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/laptop-apple-macbook">MacBook</a>
                                        <a href="https://www.dienmayxanh.com/laptop-asus">Asus</a>
                                        <a href="https://www.dienmayxanh.com/laptop-hp-compaq">HP</a>
                                        <a href="https://www.dienmayxanh.com/laptop-lenovo">Lenovo</a>
                                        <a href="https://www.dienmayxanh.com/laptop-acer">Acer</a>
                                        <a href="https://www.dienmayxanh.com/laptop-dell">Dell</a>
                                        <a href="https://www.dienmayxanh.com/laptop-msi">MSI</a>
                                        <a href="https://www.dienmayxanh.com/laptop-lg">LG</a>
                                        <a href="https://www.dienmayxanh.com/laptop-gigabyte">Gigabyte</a>
                                        <a href="https://www.dienmayxanh.com/laptop?p=duoi-15-trieu">Laptop dưới 15
                                            triệu</a>
                                        <a href="https://www.dienmayxanh.com/may-doi-tra/laptop">Laptop cũ giá
                                            rẻ</a>
                                        <a href="https://www.dienmayxanh.com/laptop-tra-gop-0-phan-tram">Laptop trả
                                            góp 0-1%</a>
                                    </aside>
                                    <aside class="w175">
                                        <p class="menuitem__title">TABLET<a
                                                href="https://www.dienmayxanh.com/may-tinh-bang">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-apple-ipad">iPad</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-samsung">Samsung</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-xiaomi">Xiaomi</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-nokia">Nokia</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-realme">Realme</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-huawei">Huawei</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-lenovo">Lenovo</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-masstel">Masstel</a>
                                        <a
                                            href="https://www.dienmayxanh.com/may-tinh-bang#c=522&amp;r=294,295&amp;pi=0">Máy
                                            tính bảng từ 3 - 15 triệu</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang?p=tren-15-trieu">Máy tính
                                            bảng trên 15tr</a>
                                        <a href="https://www.dienmayxanh.com/may-doi-tra/may-tinh-bang">Máy tính
                                            bảng cũ giá rẻ</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-bang-tra-gop-0-phan-tram">Máy
                                            tính bảng trả góp 0-1%</a>
                                    </aside>
                                    <aside class="w160">
                                        <p class="menuitem__title">MÀN HÌNH<a
                                                href="https://www.dienmayxanh.com/man-hinh-may-tinh">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/man-hinh-may-tinh-asus">Màn hình
                                            Asus</a>
                                        <a href="https://www.dienmayxanh.com/man-hinh-may-tinh-lenovo">Màn hình
                                            Lenovo</a>
                                        <a href="https://www.dienmayxanh.com/man-hinh-may-tinh-viewsonic">Màn hình
                                            Viewsonic</a>
                                        <a href="https://www.dienmayxanh.com/man-hinh-may-tinh-samsung">Màn hình
                                            Samsung</a>
                                        <a href="https://www.dienmayxanh.com/man-hinh-may-tinh-lg">Màn hình LG</a>
                                        <br>
                                        <p class="menuitem__title">MÁY TÍNH<a
                                                href="https://www.dienmayxanh.com/may-tinh-nguyen-bo">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/may-tinh-nguyen-bo-apple">Apple iMac |
                                            Mac Mini</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-nguyen-bo-hp">Máy tính để bàn
                                            HP</a>
                                        <a href="https://www.dienmayxanh.com/may-tinh-nguyen-bo-asus">Máy tính để
                                            bàn Asus</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">MÁY IN<a
                                                href="https://www.dienmayxanh.com/may-in">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/may-in-hp">Máy in HP</a>
                                        <a href="https://www.dienmayxanh.com/may-in-brother">Máy in Brother</a>
                                        <a href="https://www.dienmayxanh.com/may-in-canon">Máy in Canon</a>
                                        <a href="https://www.dienmayxanh.com/muc-in">Mực in</a>
                                    </aside>
                                </div>
                            </li>

                            <li data-submenu-id="submenu-10">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-phukien"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/phu-kien">Phụ kiện</a>,
                                    <a href="https://www.dienmayxanh.com/dong-ho"> Đồng hồ</a>
                                </div>

                                <div id="submenu-10" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">ĐỒNG HỒ THỜI TRANG<a
                                                href="https://www.dienmayxanh.com/dong-ho">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/dong-ho-deo-tay-nam">Đồng hồ nam</a>
                                        <a href="https://www.dienmayxanh.com/dong-ho-deo-tay-nu">Đồng hồ nữ</a>
                                        <a href="https://www.dienmayxanh.com/dong-ho-deo-tay-casio">Đồng hồ
                                            Casio</a>
                                        <a href="https://www.dienmayxanh.com/dong-ho-deo-tay-orient">Đồng hồ
                                            Orient</a>
                                        <a href="https://www.dienmayxanh.com/dong-ho-deo-tay-citizen">Đồng hồ
                                            Citizen</a>
                                        <br>
                                        <p class="menuitem__title">ĐỒNG HỒ THÔNG MINH<a
                                                href="https://www.dienmayxanh.com/dong-ho-thong-minh-ldp">Xem tất
                                                cả</a> </p>
                                        <a href="https://www.dienmayxanh.com/dong-ho-thong-minh-apple">Apple
                                            Watch</a>
                                        <a href="https://www.dienmayxanh.com/dong-ho-thong-minh-samsung">Samsung</a>
                                        <a href="https://www.dienmayxanh.com/dong-ho-thong-minh-beu">BeFit</a>
                                        <a href="https://www.dienmayxanh.com/dong-ho-thong-minh-xiaomi">Xiaomi</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">PHỤ KIỆN ĐIỆN THOẠI<a
                                                href="https://www.dienmayxanh.com/phu-kien">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/sac-dtdd">Pin sạc dự phòng</a>
                                        <a href="https://www.dienmayxanh.com/cap-dien-thoai">Cáp sạc</a>
                                        <a href="https://www.dienmayxanh.com/tai-nghe">Tai nghe</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-loa-bluetooth">Loa nghe
                                            nhạc</a>
                                        <a href="https://www.dienmayxanh.com/the-nho-dien-thoai">Thẻ nhớ</a>
                                        <br>
                                        <p class="menuitem__title">PHỤ KIỆN LAPTOP<a
                                                href="https://www.dienmayxanh.com/phu-kien">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/usb">USB</a>
                                        <a href="https://www.dienmayxanh.com/o-cung-di-dong">Ổ cứng</a>
                                        <a href="https://www.dienmayxanh.com/chuot-may-tinh">Chuột</a>
                                        <a href="https://www.dienmayxanh.com/ban-phim">Bàn phím</a>

                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">PHỤ KIỆN ĐIỆN MÁY</p>
                                        <a href="https://www.dienmayxanh.com/cap-hdmi-cap-tivi">Cáp HDMI, Cáp
                                            tivi</a>
                                        <a href="https://www.dienmayxanh.com/khung-treo-tivi">Khung treo Tivi</a>
                                        <a href="https://www.dienmayxanh.com/dieu-khien-tivi">Điều khiển Tivi</a>
                                        <a href="https://www.dienmayxanh.com/gia-do-may-giat">Giá đỡ máy giặt</a>
                                        <a href="https://www.dienmayxanh.com/dan-loa-dvd-loa-thanh">Loa soundbar</a>

                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">THIẾT BỊ MẠNG<a
                                                href="https://www.dienmayxanh.com/thiet-bi-mang">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/thiet-bi-mang-tp-link">Thiết bị mạng
                                            TP-LINK</a>
                                        <a href="https://www.dienmayxanh.com/thiet-bi-mang-totolink">Thiết bị mạng
                                            TotoLink</a>
                                        <a href="https://www.dienmayxanh.com/thiet-bi-mang-asus">Thiết bị mạng
                                            Asus</a>
                                        <a href="https://www.dienmayxanh.com/thiet-bi-mang-xiaomi">Thiết bị mạng
                                            Xiaomi</a>
                                        <a href="https://www.dienmayxanh.com/thiet-bi-mang-tenda">Thiết bị mạng
                                            Tenda</a>
                                        <a href="https://www.dienmayxanh.com/thiet-bi-mang-linksys">Thiết bị mạng
                                            LINKSYS</a>

                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-11">
                                <div class="dropdown">
                                    <span>
                                        <span>
                                            <i class="icon-maycu"></i>
                                        </span>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/may-doi-tra">Máy cũ, trưng bày</a>
                                </div>
                                <div id="submenu-11" class="submenu gd-menu menu-new" style="display: none;">
                                    <aside class="autow">
                                        <p class="menuitem__title">Tivi, dàn loa âm thanh</p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/tivi">Tivi</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/dan-loa-dvd">Loa
                                                Karaoke</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/micro">Micro</a>
                                        </div>
                                        <p class="menuitem__title">Điện gia dụng<a
                                                href="https://www.dienmayxanh.com/may-doi-tra/dien-gia-dung">Xem tất
                                                cả</a></p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/quat">Quạt</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/noi-com-dien">Nồi
                                                cơm</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/may-xay-sinh-to">Sinh
                                                tố/ Xay ép</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/bep-tu">Bếp điện</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/bep-gas">Bếp gas</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/ban-ui">Bàn ủi</a>
                                        </div>
                                    </aside>
                                    <aside class="autow">
                                        <p class="menuitem__title">Tủ lạnh, tủ đông</p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/tu-lanh">Tủ lạnh</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/tu-dong">Tủ đông</a>
                                        </div>
                                        <p class="menuitem__title">Máy lạnh, quạt điều hòa</p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/may-lanh">Máy lạnh</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/quat-dieu-hoa">Quạt
                                                điều hòa</a>
                                        </div>
                                    </aside>
                                    <aside class="autow">
                                        <p class="menuitem__title">Máy giặt, máy sấy</p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/may-giat">Máy giặt</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/may-say-quan-ao">Máy
                                                sấy</a>
                                        </div>
                                        <p class="menuitem__title">Máy lọc nước, nước nóng</p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/may-loc-nuoc">Máy lọc
                                                nước</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/may-nuoc-nong">Máy nước
                                                nóng</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/cay-nuoc-nong-lanh">Cây
                                                nước nóng lạnh</a>
                                        </div>
                                    </aside>
                                    <aside class="autow">
                                        <p class="menuitem__title">Phụ kiện, loa<a
                                                href="https://www.dienmayxanh.com/may-doi-tra/phu-kien">Xem tất
                                                cả</a></p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/pin-sac-du-phong">Pin
                                                sạc dự phòng</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/chuot-may-tinh">Chuột</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/cap-dien-thoai">Cáp
                                                sạc/ Adapter</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/tai-nghe-day">Tai
                                                nghe</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/phu-kien-dien-may">Phụ
                                                kiện điện máy</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/loa-laptop">Loa
                                                laptop</a>
                                        </div>
                                        <p class="menuitem__title">Viễn thông</p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/dien-thoai">Điện
                                                thoại</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/may-tinh-bang">Máy tính
                                                bảng</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/laptop">Laptop</a>
                                            <a href="https://www.dienmayxanh.com/may-doi-tra/dong-ho-thong-minh">Đồng
                                                hồ thông minh</a>
                                        </div>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-12">
                                <div class="dropdown">
                                    <span>
                                        <i class="icon-xedap"></i>
                                    </span>
                                    <a href="https://www.dienmayxanh.com/xe-dap?v=ldp">Xe đạp</a>,
                                    <a href="https://www.dienmayxanh.com/do-choi-van-dong"> Đồ chơi vận động</a>
                                </div>

                                <div id="submenu-12" class="submenu" style="display: none;">
                                    <aside>
                                        <p class="menuitem__title">XE ĐẠP<a
                                                href="https://www.dienmayxanh.com/xe-dap?v=ldp">Xem tất cả</a></p>
                                        <a href="https://www.dienmayxanh.com/xe-dap-giant">Giant</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-fornix">Fornix</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-sava">Sava</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-fascino">Fascino</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-life">Life</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-royalbaby">RoyalBaby</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-tap-the-thao">Xe đạp thể
                                            thao</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-dia-hinh-mountain-bike-mtb">Xe
                                            đạp địa hình</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-tre-em">Xe đạp trẻ em</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-dua-road-bike">Xe đạp đua</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-duong-pho-city-bike">Xe đạp
                                            thành phố</a>
                                        <a href="https://www.dienmayxanh.com/xe-dap-tra-gop-0-phan-tram">Xe đạp trả
                                            góp 0%</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">PHỤ KIỆN XE ĐẠP<a
                                                href="https://www.dienmayxanh.com/phu-kien-xe-dap">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-mu-bao-hiem-xe-dap">Mũ
                                            bảo hiểm</a>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-binh-nuoc">Bình
                                            nước</a>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-bo-den">Bộ đèn</a>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-tui-deo">Túi đeo</a>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-chan-chong">Chân
                                            chống</a>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-khoa-day">Khoá dây</a>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-gong-nuoc">Gọng
                                            nước</a>
                                        <a href="https://www.dienmayxanh.com/phu-kien-xe-dap-gang-tay">Găng tay</a>
                                    </aside>
                                    <aside>
                                        <p class="menuitem__title">Đồ chơi vận động<a
                                                href="https://www.dienmayxanh.com/do-choi-van-dong">Xem tất cả</a>
                                        </p>
                                        <a href="https://www.dienmayxanh.com/patin">Patin</a>
                                        <a href="https://www.dienmayxanh.com/scooter">Scooter</a>
                                        <a href="https://www.dienmayxanh.com/xe-thang-bang-tre-em">Xe thăng bằng</a>
                                    </aside>
                                </div>
                            </li>
                            <li data-submenu-id="submenu-13">
                                <div class="dropdown">
                                    <span>
                                        <span>
                                            <i class="icon-dichvu"></i>
                                        </span>
                                    </span>
                                    <p class="submenu__name">Dịch vụ hữu ích
                                    </p>
                                </div>
                                <div id="submenu-13" class="submenu gd-menu menu-new" style="display: none;">
                                    <aside class="w220">
                                        <p class="menuitem__title">DỊCH VỤ HỮU ÍCH</p>
                                        <div>
                                            <a href="https://www.dienmayxanh.com/sim-so-dep">Sim số, thẻ cào<span
                                                    class="menuitem__label">Giảm 3%</span></a>
                                            <a href="https://www.thegioididong.com/tien-ich/thanh-toan-tra-gop">Thu
                                                hộ</a>
                                            <a href="https://www.dienmayxanh.com/ve-sinh-may-lanh">Vệ sinh Máy lạnh
                                                - Máy giặt - Quạt</a>
                                            <a href="https://www.dichvutantam.com/#suachuadiennuoc">Sửa chữa Điện -
                                                Nước<span class="menuitem__label">Mới</span></a>
                                            <a href="https://www.thegioididong.com/tien-ich/bao-hiem-o-to-xe-may"
                                                target="_blank"> Bảo hiểm Ô tô - Xe máy<span
                                                    class="menuitem__label">Mới</span></a>
                                            <a href="https://www.bachhoaxanh.com/">Đi chợ online</a>
                                        </div>
                                    </aside>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                @foreach ($categoryList as $item => $category)
                    <li>
                        <a href="{{ route('users.components.category', ['category_id' => $category->id]) }}">
                            <span>{{ $category->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
