@extends('partials.app')
@section('content')
{{ $giohang }}
    <section class="homepage">
        <div class="container">
            <div class="home-banner-container clearfix position-relative">
                <div class="home-banner-list">
                    <a href="{{ route('Iphone14') }}" class="banner-link">
                        <!--<img src="./img/icon/appleicon.png" alt="icon" width="30px">-->
                        <div class="spacer"></div>
                        <span>IPHONE 14 SERIES</span>
                    </a>
                    <a href="{{ route('Iphone13') }}" class="banner-link">
                        <!--<img src="./img/appleicon.png" alt="icon" width="30px">-->
                        <div class="spacer"></div>
                        <span>IPHONE 13 SERIES</span>

                    </a>
                    <a href="{{ route('Iphone12') }}" class="banner-link">
                        <!--<img src="./img/icon/xiaomi.png" alt="icon" width="30px">-->
                        <div class="spacer"></div>
                        <span>IPHONE 12 SERIES</span>

                    </a>
                    <a href="{{ route('Iphone11') }}" class="banner-link">
                        <!--<img src="./img/icon/xiaomi.png" alt="icon" width="30px">-->
                        <div class="spacer"></div>
                        <span>IPHONE 11 SERIES</span>

                    </a>
                    <a href="{{ route('IphoneSE') }}" class="banner-link">
                        <!--<img src="./img/icon/xiaomi.png" alt="icon" width="30px">-->
                        <div class="spacer"></div>
                        <span>IPHONE SE</span>

                    </a>
                </div>
                <div class="home-banner-left">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-size" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active carousel-size">
                                <img src="./img/banner/slide1.jpg" class="d-block w-100 carousel-img" alt="...">
                            </div>
                            <div class="carousel-item carousel-size">
                                <img src="./img/banner/slide2.png" class="d-block w-100 carousel-img" alt="...">
                            </div>
                            <div class="carousel-item carousel-size">
                                <img src="./img/banner/slide1.jpg" class="d-block w-100 carousel-img" alt="...">
                            </div>
                            <div class="carousel-item carousel-size">
                                <img src="./img/banner/slide2.png" class="d-block w-100 carousel-img" alt="...">
                            </div>
                            <div class="carousel-item carousel-size">
                                <img src="./img/banner/slide1.jpg" class="d-block w-100 carousel-img" alt="...">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="home-banner-right">
                    <a href="#" target="_blank" rel="nofollow"><img class="img-banner-right"
                            src="./img/banner/bn1.png" width="350" height="167" alt="màn hình tháng 6"></a>

                    <a href="#" target="_blank" rel="nofollow"><img class="img-banner-right"
                            src="./img/banner/bn2.png" width="350" height="167" alt="PCAP"></a>

                </div>
            </div>

            <div class="banner-under-slider d-flex justify-content-between">
                <ul class="choose-cate">
                    <li>
                        <a href="{{ route('Iphone14') }}" target="_blank" rel="nofollow" class="hover-rotate ">
                            <div class="img-catesp cateiphone">
                                <img src="{{ asset('./AnhMacDinh/1.webp') }}" alt="iphone 14" class="bn-img">
                            </div>
                            <span>iPhone 14</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Iphone13') }}" target="_blank" rel="nofollow" class="hover-rotate">
                            <div class="img-catesp cateiphone">
                                <img src="{{ asset('./AnhMacDinh/2.webp') }}" alt="iphone 13" class="bn-img">
                            </div>
                            <span>iPhone 13</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Iphone12') }}" target="_blank" rel="nofollow" class="hover-rotate">
                            <div class="img-catesp cateiphone">
                                <img src="{{ asset('./AnhMacDinh/3.webp') }}" alt="iphone 12" class="bn-img">
                            </div>
                            <span>iPhone 12</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Iphone11') }}" target="_blank" rel="nofollow" class="hover-rotate">
                            <div class="img-catesp cateiphone">
                                <img src="{{ asset('./AnhMacDinh/4.webp') }}" alt="iphone 11" class="bn-img">
                            </div>
                            <span>iPhone 11</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('IphoneSE') }}" target="_blank" rel="nofollow" class="hover-rotate">
                            <div class="img-catesp cateiphone">
                                <img src="./AnhMacDinh/5.webp" alt="iphone 11" class="bn-img">
                            </div>
                            <span>iPhone SE</span>
                        </a>

                    </li>
                </ul>
            </div>
            <div class="box-title-container">
                <div class="banner-under-slider d-flex justify-content-between">
                    <a href="DSSanPham">
                        <img src="./img/banner/bn3.png" width="100%" alt="iphone 14">
                    </a>




                </div>
            </div>
            <div class="box-title-container-1">
                <div>
                    <div class="box-title">
                        <div class="title">
                            <div class="title-rim"></div>
                            <div class="title-text">ĐIỆN THOẠI NỔI BẬT NHẤT
                                <a target="_self" href="DSSanPham">
                                    <div class="css-01 link-text">
                                        <span class="css-02">
                                            Xem tất cả >>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chi tiết sản phẩm -->
                <div class="p-container custom-nav owl-carousel owl-theme owl-loaded owl-drag" id="js-holder">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @foreach ($dt as $is)
                                @if ($is->MaSanPham == 'iPhone14ProMax128GB' ||
                                    $is->MaSanPham == 'iPhone14Plus256GB' ||
                                    $is->MaSanPham == 'iPhone14256GB' ||
                                    $is->MaSanPham == 'iPhone14Pro256GB')
                                    <div class="owl-item active">
                                        <div class="p-item ">
                                            <a href="{{ route('ChiTietSanPham', ['MaSanPham' => $is->MaSanPham,'Mau'=>$is->TenMau ]) }}" class="p-img hover-rotate">
                                                <label>{{ $is->TenMau }}</label>
                                                <img
                                                    src="{{ asset('./AnhMacDinh/' . $is->MaSanPham.'/'.$is->TenMau . '/1.webp') }}"alt="product" />
                                            </a>
                                            <div class="p-text">
                                                <div class="product-infor">
                                                    <a href="#" class="product-name">
                                                        <h3>
                                                            <div class="text">{{ $is->TenSanPham }}</div>
                                                        </h3>
                                                    </a>
                                                    <div class="product-price">
                                                        <div class="text-price">Giá chỉ</div>
                                                        <div class="price">{{ number_format($is->DonGia) }},000 đ</div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <a href="{{ route('ChiTietSanPham', ['MaSanPham' => $is->MaSanPham,'Mau'=>$is->TenMau ]) }}"
                                                            class="btn btn-outline-grayscale btn-md">XEM CHI
                                                            TIẾT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="container">
        <div class="box-title-container-card">
            <div>
                <div class="wrapper">
                    <div class="wrapper-left">
                        <div class="box-wrapper">
                            <div class="card-header css-0">
                                <div class="box-title">
                                    <div class="title">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-body css-0">
                                <div class="card-body-lm">
                                    <div class="card-body-lm-img">
                                        <div class="banner-under-slider d-flex justify-content-between">
                                            <a href="#" target="_blank" rel="nofollow" class="hover-rotate">
                                                <img src="./img/banner/h1.jpg" width="368px" height="389px"
                                                    alt="Thương hiệu 1" class="bn-img-card">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-left">
                        <div class="box-wrapper">
                            <div class="card-header css-0">
                                <div class="box-title">
                                    <div class="title">
                                        <div class="title-rim"></div>
                                        <div class="title-text-1">
                                            <!-- <p style="vertical-align: inherit;"> -->
                                            <!-- </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body css-0">
                                <div class="card-body-lm">
                                    <div class="card-body-lm-img">
                                        <div class="banner-under-slider d-flex justify-content-between">
                                            <a href="#" target="_blank" rel="nofollow" class="hover-rotate">
                                                <img src="./img/banner/h5.png" height="389px" alt="Thương hiệu 1"
                                                    class="bn-img-card">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-left">
                        <div class="box-wrapper">
                            <div class="card-header css-0">
                                <div class="box-title">
                                    <div class="title">
                                        <div class="title-rim"></div>
                                        <div class="title-text-1">
                                            <!-- <p style="vertical-align: inherit;"> -->
                                            <!-- </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body css-0">
                                <div class="card-body-lm">
                                    <div class="card-body-lm-img">
                                        <div class="banner-under-slider d-flex justify-content-between">
                                            <a href="#" target="_blank" rel="nofollow" class="hover-rotate">
                                                <img src="./img/banner/h2.png" width="368px" height="389px"
                                                    alt="Thương hiệu 1" class="bn-img-card">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-left">
                        <div class="box-wrapper">
                            <div class="card-header css-0">
                                <div class="box-title">
                                    <div class="title">
                                        <div class="title-rim"></div>
                                        <div class="title-text-1">
                                            <!-- <p style="vertical-align: inherit;"> -->
                                            <!-- </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body css-0">
                                <div class="card-body-lm">
                                    <div class="card-body-lm-img">
                                        <div class="banner-under-slider d-flex justify-content-between">
                                            <a href="#" target="_blank" rel="nofollow" class="hover-rotate">
                                                <img src="./img/banner/h3.jpg" height="389px" alt="Thương hiệu 1"
                                                    class="bn-img-card">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

@endsection
