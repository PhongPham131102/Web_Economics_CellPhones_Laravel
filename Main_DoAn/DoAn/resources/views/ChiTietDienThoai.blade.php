@extends('layouts.app')
@section('content')
    <div class="title1">
        <div class="background">
            <div class="col-md-12">
                <ul class="muc">
                    <li><a href="trangchu.html">Trang Chủ ></a></li>
                    <li><a href="iphone.html">Điện Thoại ></a></li>
                    <li><a href="iphone.html">Iphone ></a></li>
                    <li>{{ Str::of($dt->TenDT)->replace('.', $ctdt[0]->BoNhoTrong) }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="detail">
        <div class="mainpr">
            <div class="image">
                <div class="zone">
                    <img id="anhchuyen"
                        src="{{ asset('img/' . $dt->HangSX . '/' . $dt->MaDT . '/' . $img[0]->MauSac . '/1.jpg') }}"
                        alt="thaythe" />
                </div>
                <div class="image-small">
                    @for ($i = 0; $i < $thiscolorthisphone; $i++)
                        <div class="component"><img
                                src="{{ asset('img/' . $dt->HangSX . '/' . $dt->MaDT . '/' . $img[$i]->MauSac . '/' . ($i + 1) . '.jpg') }}"
                                alt="slide" onclick="okkkk();"></div>
                        @if ($i == 4)
                        @break
                    @endif
                @endfor

            </div>
        </div>
        <div class="info">
            <h5 class="title">
                {{ Str::of($dt->TenDT)->replace('.', $ctdt[0]->BoNhoTrong) }}
            </h5>
            <div class="price">
                @foreach ($ctdt as $i)
                    @if ($i->MauSac == $color)
                        {{ number_format($i->GiaTienBan) }} đ
                    @endif
                @endforeach
            </div>
            <div class="ram">
                @foreach ($ctdts as $i)
                    @if ($i->BoNhoTrong == $ctdt[0]->BoNhoTrong)
                        @php($z = 0)
                        @foreach ($colorandrom as $j)
                            @if ($i->BoNhoTrong == $j->BoNhoTrong && $color == $j->MauSac)
                                <a
                                    href="{{ route('DienThoai', ['id' => $dt->MaDT, 'rom' => $i->BoNhoTrong, 'color' => $color]) }}">
                                    <div class="ramdetail active">
                                        <span>{{ $i->BoNhoTrong }}</span>
                                        <strong>{{ number_format($i->GiaTienBan) }} đ</strong>
                                    </div>
                                </a>
                                @php($z = 1)
                            @break
                        @endif
                    @endforeach
                    @if ($z == 0)
                        @foreach ($colorandrom as $j)
                            @if ($i->BoNhoTrong == $j->BoNhoTrong)
                                <a
                                    href="{{ route('DienThoai', ['id' => $dt->MaDT, 'rom' => $i->BoNhoTrong, 'color' => $j->MauSac]) }}">
                                    <div class="ramdetail active">
                                        <span>{{ $i->BoNhoTrong }}</span>
                                        <strong>{{ number_format($i->GiaTienBan) }} đ</strong>
                                    </div>
                                </a>
                                @php($z = 1)
                            @break
                        @endif
                    @endforeach
                @endif
            @else
                @php($z = 0)
                @foreach ($colorandrom as $j)
                    @if ($i->BoNhoTrong == $j->BoNhoTrong && $color == $j->MauSac)
                        <a
                            href="{{ route('DienThoai', ['id' => $dt->MaDT, 'rom' => $i->BoNhoTrong, 'color' => $color]) }}">
                            <div class="ramdetail">
                                <span>{{ $i->BoNhoTrong }}</span>
                                <strong>{{ number_format($i->GiaTienBan) }} đ</strong>
                            </div>
                        </a>
                        @php($z = 1)
                    @break
                @endif
            @endforeach
            @if ($z == 0)
                @foreach ($colorandrom as $j)
                    @if ($i->BoNhoTrong == $j->BoNhoTrong)
                        <a
                            href="{{ route('DienThoai', ['id' => $dt->MaDT, 'rom' => $i->BoNhoTrong, 'color' => $j->MauSac]) }}">
                            <div class="ramdetail">
                                <span>{{ $i->BoNhoTrong }}</span>
                                <strong>{{ number_format($i->GiaTienBan) }} đ</strong>
                            </div>
                        </a>
                        @php($z = 1)
                    @break
                @endif
            @endforeach
        @endif
    @endif
@endforeach

</div>
<div class="tag">
Chọn màu để xem giá
</div>
<div class="color">
<ul class="list">
    @php($id)
    @php($rom)
    @php($color)
    @foreach ($ctdt as $i)
        @if ($i->MauSac == $color)
            <a
                href="{{ route('DienThoai', ['id' => $dt->MaDT, 'rom' => $i->BoNhoTrong, 'color' => $i->MauSac]) }}">
                @php($id = $dt->MaDT)
                @php($rom = $i->BoNhoTrong)
                @php($color = $i->MauSac)
                <li class="detail-color active">
    mg
                        src="{{ asset('img/' . $dt->HangSX . '/' . $dt->MaDT . '/' . $i->MauSac . '/1.jpg') }}">
                    <div class="info-detail">
                        @php($CTDT   = $i->MaCTDT)
                        @php($COLOR = $i->MauSac)
                        <strong>{{ $i->MauSac }}</strong>
                        <br>
                        <span>{{ number_format($i->GiaTienBan) }} đ</span>
                    </div>
                </li>
            </a>
        @else
            <a
                href="{{ route('DienThoai', ['id' => $dt->MaDT, 'rom' => $i->BoNhoTrong, 'color' => $i->MauSac]) }}">
                <li class="detail-color">
                    <img
                        src="{{ asset('img/' . $dt->HangSX . '/' . $dt->MaDT . '/' . $i->MauSac . '/1.jpg') }}">
                    <div class="info-detail">
                        <strong>{{ $i->MauSac }}</strong>
                        <br>
                        <span>{{ number_format($i->GiaTienBan) }} đ</span>
                    </div>
                </li>
            </a>
        @endif
    @endforeach

</ul>
</div>
<div class="option">
<a href="{{ route('Buy', ['id' => $id, 'rom' => $rom, 'color' => $color]) }}">
    <div class="buynow">
        <strong>Mua Ngay</strong>
        <div>(Chuyển đến trang thanh toán)</div>
    </div>
</a>
<a href='{{ route('Add', ['id' => $id, 'rom' => $rom, 'color' => $color]) }}'>
    <div class="addtocart">
        <img src="{{ asset('img/cartitem.png') }}">
        <div>Thêm Vào Giỏ Hàng</div>
    </div>
</a>
</div>
</div>
</div>
<div class="support">
<div class="priacy">
<strong>Thông tin sản phẩm</strong>
<svg height="15" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
<title>
    mb</title>
<image width="35" height="50" transform="translate(7.5)"
    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAyCAYAAADWU2JnAAAABHNCSVQICAgIfAhkiAAAAWRJREFUWEftmcFNw0AQRf+sG6ADoAJCBUAHlJDL7hW7ApIOcrS8PpgKKAHTQaiAlOBcfdhBIxHJRgFpbWT7MHuLtM78efu0hx0CAOfcM4A1gCv5PdVi5oaIamNMluf5gZxzGwASZrbFzHvv/a2E+ZyayLmuQwgPEoZnQ9IvnC0pzHbRYbIQwn6qYzPG7ADcfNfrkxGJyrKspwpjra2J6E7D/CSuZH5zUMkomdj7SZ1RZ9SZWALqTCwxvWfUGXUmloA6E0tM7xl1Rp2JJaDOxBL7855h5hTAZC9XAHZEtDr7WBTb2T/vX/YDY2yzL23bplVVNc65RwCvsX/Q2T+KzLEoiotucWutOPA0MNDwMMz87r2/7xYeOYcYHkZCGGOuZRpyCmStfSOiXsAISluy1h6I6DLio+5WCbIJITTGGBkRiTeD1mmQMfuIB8BHURQrkjbkrJl5PYLQIBoAjsxcJ0mSynF/AXY82KKEipF6AAAAAElFTkSuQmCC">
</image>
</svg>
<p>Mới, đầy đủ phụ kiện từ nhà sản xuất</p>
<p>Thân máy, cáp USB-C to Lightning, sách HDSD
<p>
<p>1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành
chính hãng Apple : Điện Thoại Vui ASP (Apple Authorized Service Provider)
<p>

</div>
<div class="infosp">

<strong>Chính sách bán hàng</strong>
<p>Sản phẩm được miễn phí giao hàng</p>
<p>Miễn phí giao hàng cho đơn hàng từ 800K
<p>
<p>Cam kết hàng chính hãng 100%
<p>
<p>Đổi trả trong vòng 10 ngày
<p>
</div>
</div>
</div>
<div class="mota">
<div class="container">
<div class="row">
<div class="col-md-8 s1">
@foreach ($baiviets as $item)
    @if ($dt->MaDT == $item->MaDT)
        <h4>{{ $item->tieude }}</h4>
        <img src="{{ asset($item->img) }}" alt="giasoc">
        <p>{{ $item->noidung }}</p>
    @endif
@endforeach
</div>
<div class="col-md-4 s2">
<h4>Thông Số Kỹ Thuật</h4>
<div class="s2-1">
    <div>Thương Hiệu</div>
    <div>{{ $dt->HangSX }}</div>
</div>
<div class="s2-2">
    <div>Bảo hành</div>
    <div>12 tháng</div>
</div>
<div class="s2-1">
    <div>Thông tin chung</div>
    <div></div>
</div>
<div class="s2-2">
    <div>Tên</div>
    <div>{{ Str::of($dt->TenDT)->replace('.', '') }}</div>
</div>
<div class="s2-1">
    <div>Màu sắc</div>
    <div>{{ $color }}</div>
</div>
<div class="s2-2">
    <div>Màn hình</div>
    <div></div>
</div>
<div class="s2-1">
    <div>Loại màn hình</div>
    <div>{{ $dt->ManHinh }}</div>
</div>
<div class="s2-2">
    <div>Pin</div>
    <div>{{ $dt->Pin }}</div>
</div>
<div class="s2-1">
    <div>Cấu hình</div>
    <div></div>
</div>
<div class="s2-2">
    <div>Dung lượng (ROM)</div>
    <div>{{ $ctdt[0]->BoNhoTrong }}</div>
</div>
<div class="s2-1">
    <div>Hệ điều hành</div>
    <div>{{ $dt->HeDieuHanh }}</div>
</div>
<div class="s2-2">
    <div>RAM</div>
    <div>{{ $dt->Ram }}</div>
</div>
</div>
</div>
</div>
</div>
<div class="good">
<span class="bentrai">
Sản Phẩm Tương Tự
</span>
</div>
<div class="rowproduct">
@php($sl = 0)
@foreach ($product as $dtsame)
@php($z = 0)
@foreach ($detailproduct as $ctdtsame)
@foreach ($allcolor as $color)
@if ($dtsame->MaDT == $ctdtsame->MaDT &&
    $color->MaDT == $dtsame->MaDT &&
    $color->BoNhoTrong == $ctdtsame->BoNhoTrong)
    <a
        href="{{ route('DienThoai', ['id' => $dtsame->MaDT, 'rom' => $ctdtsame->BoNhoTrong, 'color' => $color->MauSac]) }}">
        <div class="clmainproduct">
            <div class="image"><img
                    src="{{ asset('img/' . $dtsame->HangSX . '/' . $dtsame->MaDT . '/' . $color->MauSac . '/1.jpg') }}"
                    alt="giasoc"></div>
            <h5 class="title">{{ Str::of($dtsame->TenDT)->replace('.', $ctdtsame->BoNhoTrong) }}
            </h5>
            <div class="some-info">
                <span>{{ $dtsame->Ram }}</span>
                <span>{{ $ctdtsame->BoNhoTrong }}</span>
            </div>
            <div class="price">{{ number_format($ctdtsame->GiaTienBan) }} đ</div>
        </div>
    </a>
    @php($sl += 1)
    @php($z = 1)
@break
@endif
@if ($z == 1)
@break
@endif
@endforeach
@if ($z == 1)
@break
@endif
@endforeach
@if ($sl == 5)
@break
@endif
@endforeach
</div>
<div class="box-rate">
<h2>Đánh giá & nhận xét {{ Str::of($dt->TenDT)->replace('.', $ctdt[0]->BoNhoTrong . ' ' . $COLOR) }}</h2>
<div class="box-rate-detail">
<div class="review-score">
@php($sosao = 0)
@php($sodanhgia = 0)
@php($sao5 = 0)
@php($sao4 = 0)
@php($sao3 = 0)
@php($sao2 = 0)
@php($sao1 = 0)
@foreach ($danhgias as $danhgia)
@if ($danhgia->MaCTDT == $CTDT)
@php($sosao += $danhgia->SoSao)
@php($sodanhgia++)
@if ($danhgia->SoSao == 5)
@php($sao5++)
@elseif ($danhgia->SoSao == 4)
@php($sao4++)
@elseif ($danhgia->SoSao == 3)
@php($sao3++)
@elseif ($danhgia->SoSao == 2)
@php($sao2++)
@elseif ($danhgia->SoSao == 1)
@php($sao1++)
@endif
@endif
@endforeach
@php($avg = 0)
@if ($sodanhgia == 0)
<p class="score">0/5</p>
@else
@php($avg = $sosao / $sodanhgia)
<p class="score">{{ $avg }}/5</p>
@endif
@php($avg = intval($avg))
<div>
@for ($i = 1; $i < 6; $i++)
@if ($i <= $avg)
<div class="icon is-active"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 576 512">
<path
    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
</path>
</svg></div>
@else
<div class="icon"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 576 512">
<path
    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
</path>
</svg></div>
@endif
@endfor


</div>
<p><strong>{{ $sodanhgia }}</strong> đánh giá và nhận xét</p>
</div>
<div class="review-star">
<div class="rating-level">
<div class="star-count">
<span class="text">5</span>
<div class="is-active"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 576 512">
<path
d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
</path>
</svg></div>
</div> <progress max="{{ $sodanhgia }}" value="{{ $sao5 }}" class="progress"></progress>
<span class="is-size">{{ $sao5 }} đánh giá</span>
</div>
<div class="rating-level">
<div class="star-count">
<span class="text">4</span>
<div class="is-active"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 576 512">
<path
d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
</path>
</svg></div>
</div> <progress max="{{ $sodanhgia }}" value="{{ $sao4 }}" class="progress"></progress>
<span class="is-size">{{ $sao4 }} đánh giá</span>
</div>
<div class="rating-level">
<div class="star-count">
<span class="text">3</span>
<div class="is-active"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 576 512">
<path
d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
</path>
</svg></div>
</div> <progress max="{{ $sodanhgia }}" value="{{ $sao3 }}" class="progress"></progress>
<span class="is-size">{{ $sao3 }} đánh giá</span>
</div>
<div class="rating-level">
<div class="star-count">
<span class="text">2</span>
<div class="is-active"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 576 512">
<path
d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
</path>
</svg></div>
</div> <progress max="{{ $sodanhgia }}" value="{{ $sao2 }}" class="progress"></progress>
<span class="is-size">{{ $sao2 }} đánh giá</span>
</div>
<div class="rating-level">
<div class="star-count">
<span class="text">1</span>
<div class="is-active"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 576 512">
<path
d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
</path>
</svg></div>
</div> <progress max="{{ $sodanhgia }}" value="{{ $sao1 }}" class="progress"></progress>
<span class="is-size">{{ $sao1 }} đánh giá</span>
</div>
</div>
</div>
<div class="rate-comment">
@foreach ($danhgias as $danhgia)
@if ($danhgia->MaCTDT == $CTDT)
@foreach ($nguoidungs as $nguoidung)
@if ($danhgia->MaNguoiDung == $nguoidung->MaNguoiDung)
<div class="comment">
<div class="info">
<div class="avatar-name">
    <p class="avatar">{{ substr($nguoidung->HoTen, 0, 1) }}</p>
    <span class="name">{{ $nguoidung->HoTen }}</span>
</div>
<p class="date-time">{{ $danhgia->created_at }}</p>
</div>
<div class="text-comment">
<div class="rate-star">
    <strong>Đánh giá: </strong>
    <div>
        @for ($i = 1; $i < 6; $i++)
            @if ($i < $danhgia->sosao)
                <div class="icon"><svg height="15"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                        </path>
                    </svg></div>
            @else
                <div class="icon is-active"><svg height="15"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                        </path>
                    </svg></div>
            @endif
        @endfor
    </div>
</div>
<div class="rate-star">
    <strong>Nhận xét: </strong>
    <span>{{ $danhgia->NoiDung }}</span>
</div>
</div>
</div>
@endif
@endforeach
@endif
@endforeach

</div>
</div>
<div class="box-comment">
<p>Bình Luận</p>
<div class="comment-area">
<textarea id="content"
    placeholder="Xin mời để lại câu hỏi, sẽ trả lời lại trong 1h, các câu hỏi sau 22h - 8h sẽ được trả lời vào sáng hôm sau"
    class="textarea"></textarea>
<button id="send" class="button">
<div class="icon-paper-plane"><svg height="15" xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 512 512">
<path
d="M511.6 36.86l-64 415.1c-1.5 9.734-7.375 18.22-15.97 23.05c-4.844 2.719-10.27 4.097-15.68 4.097c-4.188 0-8.319-.8154-12.29-2.472l-122.6-51.1l-50.86 76.29C226.3 508.5 219.8 512 212.8 512C201.3 512 192 502.7 192 491.2v-96.18c0-7.115 2.372-14.03 6.742-19.64L416 96l-293.7 264.3L19.69 317.5C8.438 312.8 .8125 302.2 .0625 289.1s5.469-23.72 16.06-29.77l448-255.1c10.69-6.109 23.88-5.547 34 1.406S513.5 24.72 511.6 36.86z">
</path>
</svg></div>
Gửi
</button>
</div>
<div id="comment">
@foreach ($binhluans as $binhluan)
@if ($binhluan->MaCTDT == $CTDT)
@foreach ($nguoidungs as $nguoidung)
@if ($binhluan->MaNguoiDung == $nguoidung->MaNguoiDung)
<div class="comment">
<div class="info">
<div class="avatar-name">
    <p class="avatar">{{ substr($nguoidung->HoTen, 0, 1) }}</p>
    <span class="name">{{ $nguoidung->HoTen }}</span>
</div>
<p class="date-time">{{ $binhluan->created_at }}</p>
</div>
<div class="text-comment">
<div class="rate-star">
    <strong>Nhận xét: </strong>
</div>
<div class="rate-star">

    <span>{{ $binhluan->NoiDung }}</span>
</div>
</div>
</div>
@endif
@endforeach
@endif
@endforeach
</div>
<input id="MaCTDT" type="hidden" value="{{ $CTDT }}" />
</div>
<script src="js/slide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript">
    $('#send').click(function(event) {
        var content = document.getElementById('content').value;
        var ctdt = document.getElementById('MaCTDT').value;
        $.ajax({
            url: "/api/comment",
            type: 'POST',
            dataType: 'json',
            data: {
                content: content,
                ctdt: ctdt,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                document.getElementById('content').value = '';
                $('#comment').html('');
                // $('#city-dd').append('<option value="' + val.id + '"> ' + val.tenxa +
                //     ' </option>')
                $.each(response.contents, function(index, val) {
                    if (val.MaCTDT == ctdt) {
                        $.each(response.user, function(index, val1) {
                            if (val.MaNguoiDung == val1.MaNguoiDung) {
                                var name = val1.HoTen.substr(0, 1);
                                $('#comment').append(`
                                            <div class="comment">
                                            <div class="info">
                                            <div class="avatar-name">
                                            <p class="avatar">` + name + ` </p>
                                            <span class="name">` + val1.HoTen + `</span>
                                            </div>
                                            <p class="date-time">` + val.created_at + `</p>
                                            </div>
                                            <div class="text-comment">
                                            <div class="rate-star">
                                            <strong>Nhận xét: </strong>
                                            </div>
                                            <div class="rate-star">
                                            <span>` + val.NoiDung + `</span>
                                            </div>
                                            </div>
                                            </div>
                                                `);
                            }
                        });
                    }
                });
            }
        })
    });
</script>
@include('layouts.footer');
@endsection
