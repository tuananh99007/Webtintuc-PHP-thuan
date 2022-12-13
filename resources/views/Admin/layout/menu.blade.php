@php
$nameRoute = Route::currentRouteName();
@endphp
<nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li @if ($nameRoute == 'admin.users.list') class="active-menu" @endif>
                <a  href="{{route('admin.users.list')}}"> Tài Khoản</a>
            </li>
            <li @if ($nameRoute == 'admin.category.list') class="active-menu" @endif>
                <a href="{{route('admin.category.list')}}">Danh mục</a>
            </li>
            <li @if ($nameRoute == 'admin.products.list') class="active-menu" @endif>
                <a href="{{route('admin.products.list')}}">Sản phẩm</a>
            </li>
            <li @if ($nameRoute == 'admin.cart.purchase_account') class="active-menu" @endif>
                <a href="{{route('admin.cart.purchase_account')}}">Tài khoản mua hàng</a>
            </li>
            <li @if ($nameRoute == 'admin.users.logout') class="active-menu" @endif>
                <a  href="{{route('admin.users.logout')}}"> Đăng Xuất</a>
            </li>
        </ul>
    </div>
</nav>