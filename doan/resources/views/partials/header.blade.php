
<!doctype html>
<html lang="vi">

<head>
    <title>F.Studio</title>
    <link rel="shortcut icon" href="img/logo/logo.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css')}}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('FontAwesome/docs/css/all.css')}}">
    <!--Style CSS-->
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/ripple_loader.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/body.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/media.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/pagination.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/taikhoan.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/dssanpham.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/sanpham.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/chitietsp.css')}}">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/sanpham.css">
    <link rel="stylesheet" href="./CSS/ripple_loader.css">
    <link rel="stylesheet" href="./CSS/body.css">
    <link rel="stylesheet" href="./CSS/media.css">
    <link rel="stylesheet" href="./CSS/pagination.css">
    <link rel="stylesheet" href="./CSS/gioHang.css">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/muahang.css">

    <!-- Carouse-->
    <link rel="stylesheet" href="{{asset('js/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/owlcarousel/owl.theme.default.min.css')}}">
    <!-- Phần js -->
    <!-- <script src="/js/goToTop.js" type="text/javascript"></script>
    <script src="/js/Jquery/Jquery.min.js" type="text/javascript"></script>
    <script src="/js/sanpham.js" type="text/javascript"></script> -->

</head>
<header>
        <div class="header-text-top">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between text-13">
                    <div class="address-left clearfix d-flex">
                        <!-- Ripple loader -->
                        <!--<div class="ripple-loader-wrapper">
                                <div class="ripple-loader">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>-->
                        <a class="navbar-brand" href="{{ route('TrangChu') }}">
                            <img src={{ asset('img/logo/logo1.png') }} alt="FStudio" class="logo" />
                        </a>
                        <!--<p class="m-0">
                                <marquee>
                                    HCM: 65 Đường Huỳnh Thúc Kháng, Bến Nghé, Quận 1
                                </marquee>
                            </p>-->
                    </div>
                    <div class="text-title">
                        <a href="#" class="link-text">
                            <i class="fa fa-headset"></i>
                            <div class="spacer"></div>
                            Giao hàng miễn phí:
                            <span class="highlight">1800 6610</span>
                        </a>
                        <a href="#" class="link-text">
                            <i class="fa fa-headset"></i>
                            <div class="spacer"></div>
                            CSKH:
                            <span class="highlight">1800 6616</span>
                        </a>
                        <a href="#" class="link-text">
                            <i class="fa fa-cog fa-spin"></i>
                            <div class="spacer"></div>
                            <span>Trung tâm bảo hành</span>
                        </a>
                        <a href="#" class="link-text">
                            <i class="fa fa-user"></i>
                            <div class="spacer"></div>
                            <span>Đăng ký</span>
                        </a>
                        <a href="DangNhap" class="link-text">
                            <i class="fa fa-user"></i>
                            <div class="spacer"></div>
                            <span>Đăng nhập</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <header class="header-2">
            <div class="container">
                <div class="row row-1">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-9">
                        <div class="search">
                            <form method="POST" action="{{ route('TimKiem') }}">
                                @csrf
                                <div class="canh">
                                    <input name="content" class="s1" placeholder="Bạn cần tìm gì...?" />
                                    <button type="submit" class="s2"><i class="fa fa-search"></i> </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="giohang">
                            <a href="{{ route('GioHang') }}">
                                <img src="{{ asset('img/icon/cart.png') }}" >
                                <sup class="top">{{ $giohang }}</sup>
                                <div class="bottom">Giỏ Hàng</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </header>