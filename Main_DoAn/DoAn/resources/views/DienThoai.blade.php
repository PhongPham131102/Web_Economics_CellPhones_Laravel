@extends('layouts.app')
@section('content')
    <div class="title1">
        <div class="background">
            <div class="col-md-12">
                <ul class="muc">
                    <li><a href="{{ route('TrangChu') }}">Trang Chủ ></a></li>
                    <li><a href="iphone.html">Điện Thoại</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="brand">
        <div class="list-brand">
            <a href="{{ route('HangSX',['HangSX'=>'Iphone']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_71_.png" alt="Apple"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'SamSung']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_72_.png" alt="Samsung"
                    loading="lazy" class="filter-brand__img"></a>
            <a href="{{ route('HangSX',['HangSX'=>'Xiaomi']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_73_.png" alt="Xiaomi"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'oppo']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_74_.png" alt="OPPO"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'Vivo']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_67_.png" alt="vivo"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'Nokia']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_75_.png" alt="Nokia"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'realme']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_76_.png" alt="realme"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'oneplus']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_79_.png" alt="OnePlus"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'asus']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_77_.png" alt="ASUS"
                    loading="lazy" class="filter-brand__img">
            </a>
            <a href="{{ route('HangSX',['HangSX'=>'nubia']) }}">
                <img src="https://cdn2.cellphones.com.vn/x/media/tmp/catalog/product/t/_/t_i_xu_ng_80_.png" alt="Nubia"
                    loading="lazy" class="filter-brand__img">
            </a>

        </div>
    </div>
    <div class="rowproduct">
        @foreach ($dts as $dt)
            @php($z = 0)
            @foreach ($ctdts as $ctdt)
                @foreach ($colors as $color)
                    @if ($dt->MaDT == $ctdt->MaDT && $color->MaDT == $dt->MaDT && $color->BoNhoTrong == $ctdt->BoNhoTrong)
                        <a href="{{ route('DienThoai', ['id' => $dt->MaDT, 'rom' => $ctdt->BoNhoTrong, 'color' => $color->MauSac]) }}">
                            <div class="clmainproduct">
                                <div class="image"><img
                                        src="{{ asset('img/' . $dt->HangSX . '/' . $dt->MaDT . '/' . $color->MauSac . '/1.jpg') }}"
                                        alt="giasoc"></div>
                                <h5 class="title">{{ Str::of($dt->TenDT)->replace('.', $ctdt->BoNhoTrong) }}
                                </h5>
                                <div class="some-info">
                                    <span>{{ $dt->HeDieuHanh }}</span>
                                    <span>{{ $dt->Ram }}</span>
                                    <span>{{ $ctdt->BoNhoTrong }}</span>
                                </div>
                                <div class="price">{{ number_format($ctdt->GiaTienBan) }} đ</div>
                            </div>
                        </a>
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
@endforeach
</div>
@include('layouts.footer');
@endsection
