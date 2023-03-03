@extends('partials.app')
@section('content')
@php($masp);
@php($mactsp);
@php($mau);
    <section>
        <div class="container">
            <div class="chi-tiet"> 
                <div class="mo-ta">
                    <div class="thubmail-slide">
                        <img src="{{ asset('./AnhMacDinh/' . $dt[0]->MaSanPham.'/'.$mausac . '/1.webp') }}" class="img-feature" width="600" height="600">
                        
                    </div>

                    <ul class="policy">
                        <li>
                            <span>
                                <img src="./img/icon/icon1.png" alt="">
                                Bộ sản phẩm gồm: Cáp Lightning - Type C, Cây lấy sim, Hộp, Sách hướng dẫn
                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="./img/icon/reload.png" alt="">
                                Hư gì đổi nấy
                                <b>12 tháng</b>
                                tại cái chi nhánh trên toàn quốc
                                <a href="#">Xem chi tiết chính sách bảo hành, đổi trả</a>

                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="./img/icon/trusted1.png" alt="">
                                Bảo hành chính hãng 1 năm
                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="./img/icon/express.png" alt="">
                                Giao hàng nhanh toàn quốc
                                <a href="#">Xem chi tiết</a>

                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="./img/icon/crown.webp" alt="">
                                Tổng đài:
                                <a href="#">1900.6291.6291</a>
                                (9h00 đến 21h00)
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="thong-so">
                    
                    <div class="wrapper-1">
                        <h1> {{ $dt[0]->TenSanPham }}
                            <i>Mới</i>
                        </h1>
                        <div class="price">
                            <div class="text text-price">
                                 {{ number_format($dt[0]->DonGia) }},000 đ 
                            </div>
                            
                        </div>
                        <div class="color-sp">
                            <span>Màu Sắc:</span>
                            <!--<ul>
                                <li class="active">
                                    <a href="#" style="background-color:#232A31"></a>
                                </li>
                                <li>
                                    <a href="#" style="background-color:#FAF7F2"></a>
                                </li>
                                <li>
                                    <a href="#" style="background-color:#FB1634"></a>
                                </li>
                                <li>
                                    <a href="#" style="background-color:#B2C5D6"></a>
                                </li>
                                <li>
                                    <a href="#" style="background-color:#E5DDEA"></a>
                                </li>
                            </ul>-->
                        </div>

                        <div class="ram">
                            @foreach ($dt as $item)
                            @if ($item->TenMau==$mausac)
                            <div  class="ramdetail active">
                                @php($masp=$item->MaSanPham);
                                @php($mactsp=$item->MaChiTietSanpham);
                                @php($mau=$item->TenMau);
                                <a href="{{ route('ChiTietSanPham', ['MaSanPham' => $item->MaSanPham,'Mau'=>$item->TenMau ]) }}">{{ $item->TenMau }}</a>
                            </div>
                            @else
                            <div  class="ramdetail">
                                <a href="{{ route('ChiTietSanPham', ['MaSanPham' => $item->MaSanPham,'Mau'=>$item->TenMau ]) }}">{{ $item->TenMau }}</a>
                            </div>
                            @endif

                            @endforeach
                        </div>
                        
                        <div id="promotion-detail" class="box-promo">
                            <span>Khuyến mãi</span>
                            <small>Giá và khuyến mãi dự kiến áp dụng đến 23:59 | 31/12</small>
                            <div class="content-promo">
                                <p>
                                    <i></i>
                                    <b>Tặng Gói bảo hiểm rơi vỡ 12 tháng
                                        <a href="#">Click để xem chi tiết</a>
                                        <strong>*</strong>
                                    </b>
                                </p>
                                <p>
                                    <i></i>
                                    <b>Bảo hành 24 tháng (12 tháng chính hãng + 12 tháng tặng thêm)
                                        <strong>*</strong>
                                    </b>
                                </p>
                                <p>
                                    <i></i>
                                    <b>Thu cũ Đổi mới: Giảm đến 2 triệu (Tuỳ model máy cũ, không áp dụng kèm giảm giá
                                        qua cổng thanh toán)
                                        <a href="#">Click để xem chi tiết</a>
                                        <strong>*</strong>
                                    </b>
                                </p>
                            </div>
                            <p class="text">
                                <em class="note">(*)</em>
                                Giá hoặc khuyến mãi không áp dụng trả góp lãi suất đặc biệt (0%, 0.5%, 1%)
                            </p>
                        </div>
                        <div class="campaign">
                            <b>Ưu đãi khi thanh toán</b>
                            <div class="sliderX">
                                <div class="campaign-option">
                                    <figure class="vnpayqr">
                                        <i></i>
                                        <img src= "{{ asset('./img/icon/vnpay.png') }}" alt="">
                                    </figure>
                                    <b>
                                        Giảm
                                        <b>300.000₫</b>
                                    </b>
                                    <span>Sản phẩm iPhone</span>
                                    <div>
                                        <i>?</i>
                                    </div>
                                </div>
                                <div class="campaign-option">
                                    <figure class="exembank">
                                        <i></i>
                                        <img src="{{ asset('./img/icon/eximbank.jpg') }}" alt="">
                                    </figure>
                                    <b>
                                        Giảm
                                        <b>500.000₫</b>
                                    </b>
                                    <span>Cho sản phẩm từ 3 triệu</span>
                                    <div>
                                        <i>?</i>
                                    </div>
                                </div>
                                <div class="campaign-option">
                                    <figure class="ocb">
                                        <i></i>
                                        <img src="{{ asset('./img/icon/ocb.png') }}" width="50px" alt="">
                                    </figure>
                                    <b>
                                        Giảm
                                        <b>500.000₫</b>
                                    </b>
                                    <span>Cho sản phẩm từ 10 triệu</span>
                                    <div>
                                        <i>?</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buy-sp has-threebtn">
                            <a  href="{{ route('buynow', ['MaSanPham' =>$masp,'MaChiTietSanPham'=>$mactsp,'MauSac'=>$mau ]) }}" class="btn-buy full muangay">Mua ngay</a>
                            <a href="{{ route('add', ['MaSanPham' =>$masp,'MaChiTietSanPham'=>$mactsp,'MauSac'=>$mau ]) }}" class="btn-buy full themgio">Thêm vào giỏ hàng</a>
                        </div>

                        </span>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="mota">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 s1">
                        @foreach ($baiviets as $item)
                                @if ($item->MaLoaiSanPham==$dt[0]->MaLoaiSanPham)
                                <h5>{{ $item->tieude }}</h5>
            
                                <p>{{ $item->noidung }}</p>
                                <img src="{{ asset($item->img)}}" alt="thaythe" />
                                @endif
                        @endforeach                        
                    </div>
                    @foreach ($dt as $item)
                    <div class="col-md-4 s2">
                        <h4>Thông Số Kỹ Thuật</h4>
                        
                        <div class="s2-2">
                            <div>Tên sản phẩm:</div>
                            <div>{{ $item->TenSanPham}}</div>
                        </div>
                        <div class="s2-2">
                            <div>Hệ điều hành:</div>
                            <div>{{ $item->HeDieuHanh}}</div>
                        </div>
                        <div class="s2-2">
                            <div>Kích thước màn hình:</div>
                            <div>{{ $item->KichThuocManHinh }}</div>
                        </div>
                        <div class="s2-2">
                            <div>Bộ nhớ trong:</div>
                            <div>{{ $item->BoNhoTrong }}</div>
                        </div>
                        <div class="s2-2">
                            <div>RAM:</div>
                            <div>{{ $item->Ram }}</div>
                        </div>
                        <div class="s2-2">
                            <div>ChipSet:</div>
                            <div>{{ $item->ChipSet }}</div>
                        </div>
                        
                        <div class="s2-2">
                            <div>Pin:</div>
                            <div>{{ $item->Pin}}</div>
                        </div>
                        <div class="s2-2">
                            <div>Thẻ Sim:</div>
                            <div>{{ $item->TheSim }}</div>
                        </div>
                        <div class="s2-2">
                            <div>Bảo hành</div>
                            <div>12 tháng</div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</section>

@endsection