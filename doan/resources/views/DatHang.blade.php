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
<h3>THÔNG TIN ĐƠN HÀNG</h3>
<div class="infor">
    <div class="customer">
        <p class="title"> Thông tin giao hàng</p>
        <div class="input-customer">
            <input type="text" placeholder="Tên người nhận(*)" maxlength="50" value="{{ $nguoidung[0]->HoTen }}" class="type-input">
            <input type="text" placeholder="Số điện thoại (*)" maxlength="10" value="{{ $nguoidung[0]->SDT }}" class="type-input">
        </div>
        <div class="address-box">
            <input type="text" placeholder="Số Nhà, Tên Đường" maxlength="10" value="{{ $nguoidung[0]->DiaChi }}" class="type-input">
        </div>

    </div>
</div>

<div class="tranggiohang">
    <div class="total">
        <div class="benphai">
            Tổng tiền:{{ number_format($total) }},000 đ 
            <a href="{{ route("DatHang1") }}"><input type="button" value="Đặt Hàng"></a>
        </div>

    </div>
</div>
@endsection