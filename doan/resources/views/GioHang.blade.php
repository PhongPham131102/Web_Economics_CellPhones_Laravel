@extends('partials.app')
@section('content')
@php($total=0)
@foreach ($detailcart as $row)
            @if ($row->MaGioHang==1)
            @foreach ($products as $product)
            @if ($product->MaChiTietSanpham == $row->MaChiTietSanpham && $product->TenMau == $row->MauSac)
            @php($total+=$product->DonGia)
            @endif
            @endforeach
            @endif
            @endforeach
<div class="tranggiohang">
    <div class="container">
        <div class="row ttsp">
            <span class="col-md-5 sp">Sản Phẩm</span>
            <span class="col-md-2">Đơn Giá</span>
            <span class="col-md-2">Số Lượng</span>
            <span class="col-md-2">Số Tiền</span>
            <span class="col-md-1">Thao tác</span>
        </div>
    </div>
    <div id="sosp" class="container">
        
        @foreach ($detailcart as $row)
            @if ($row->MaGioHang==1)
            @foreach ($products as $product)
            @if ($product->MaChiTietSanpham == $row->MaChiTietSanpham && $product->TenMau == $row->MauSac)
            <div class="row sanpham">
                <span class="col-md-1 check"> <input class="stardust-checkbox__input" type="checkbox"></span>
                <span class="col-md-4 tensanpham">
                    <img class="anhchuyen" src={{ asset('./AnhMacDinh/' . $product->MaSanPham.'/'.$product->TenMau . '/1.webp') }} alt="thaythe">
                    <span>{{ $product->TenSanPham }}</span>
                </span>
                <span class="col-md-2 giamd">{{ $product->DonGia }}000</span>
                <div class="col-md-2 soluong">
                    <span class="giam">-</span>
                    <input class="sl" type="text" value="1">
                    <span class="tang">+</span>
                </div>
                <span class="col-md-2 money1">{{ $product->DonGia }}000</span>
                <span class="col-md-1 xoa">Xóa</span>
            </div>
            @endif
            @endforeach
            @endif
        @endforeach
        
    </div>
    <div class="total">
        <div class="benphai">
            Tổng tiền:{{ number_format($total) }},000 đ 
            <a href="{{ route("DatHang") }}"><input type="button" value="Đặt Hàng"></a>
            
        </div>

    </div>
</div>
    @endsection