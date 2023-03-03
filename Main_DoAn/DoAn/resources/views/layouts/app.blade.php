<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logoshop.png') }}">
    <link href="{{ asset('css/trangbanhang.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <title>
        PNP Shop
    </title>
</head>

<body>

    <header>
        <div id="top-header">
            <ul class="header-top left">
                <li><a href="#"><i class="fa fa-phone"></i>Liên Hệ</a></li>
                <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
            </ul>

            @if (isset($_COOKIE['is_logged'])&&$_COOKIE['is_logged']==0)
                <ul class="header-top right">
                    <li><a href="{{ route('DangKy') }}"><i class="fa fa-key"></i> Đăng Ký</a></li>
                    <li><a href="{{ route('DangNhap') }}"><i class="fa fa-user-o"></i> Đăng Nhập</a></li>
                </ul>
            @else
                @php($sl = 0)
                @foreach ($detailcart as $item)
                    @if ($item->MaGioHang == $quantityphone[0]->MaGioHang)
                        @php($sl += 1)
                    @endif
                @endforeach
                <div class="header-top user">
                    <div class="information">
                        <div class="avatar">
                            <svg id="icon-smember" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 560 560"
                                width="20">
                                <defs>
                                    <style>
                                        #icon-smember .cls-1 {
                                            fill: none;
                                            stroke: #fff;
                                            stroke-width: 30px;
                                        }
                                    </style>
                                </defs>
                                <title>Asset 1</title>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <circle cx="280" cy="280" r="265" class="cls-1"></circle>
                                        <circle cx="280" cy="210" r="115" class="cls-1"></circle>
                                        <path
                                            d="M86.82,461.4C124.71,354.71,241.91,298.93,348.6,336.82A205,205,0,0,1,473.18,461.4"
                                            class="cls-1"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="name">{{ $user[0]->HoTen }}</div>
                    </div>
                    <div class="action">
                        <a class="avatar" href="{{ route('TrangCaNhan') }}"><svg aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="user-circle">
                                <path
                                    d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z">
                                </path>
                            </svg> <span>Trang cá nhân</span></a>
                        <hr class="dropdown-divider">
                        <a class="avatar" href="{{ route('DangXuat') }}"><svg aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="user-circle">
                                <path data-v-170b8c3e="" fill="currentColor"
                                    d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z">
                                </path>
                            </svg> <span>Thoát</span></a>
                    </div>
                </div>
            @endif

        </div>
    </header>
    <header class="header-2">
        <div class="container">
            <div class="row row-1">
                <div class="col-md-2">
                    <div class="logo"><a href="{{ route('TrangChu') }}"><img src="{{ asset('img/logoshop.png') }}"
                                alt="PNPSHOP"></a></div>
                </div>
                <div class="col-md-9">
                    <div class="search">
                        <form method="POST" action="{{ route('TimKiem') }}">
                            @csrf
                            <div class="canh">
                                <input name="content" class="s1"
                                    placeholder="Tìm sản phẩm,danh mục hay thương hiệu bạn muốn ..." />
                                <button type="submit" class="s2"><i class="fa fa-search"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="giohang">
                        @if ($_COOKIE['is_logged'] == false)
                            <a href="#">
                                <img src="{{ asset('img/cart.png') }}">
                                <sup class="top">0</sup>
                                <div class="bottom">Giỏ Hàng</div>
                            </a>
                        @else
                            <a href="{{ route('GioHang') }}">
                                <img src="{{ asset('img/cart.png') }}">
                                <sup id="giohang" class="top"> {{ $sl }}</sup>
                                <div class="bottom">Giỏ Hàng</div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <script src="{{ asset('js/slide.js') }}"></script>
</body>

</html>
