@extends('layouts.app')
@section('content')
    @php($totalprice = 0)
    @foreach ($detailcart as $item)
        @foreach ($quantityphone as $item2)
            @if ($item->MaGioHang == $item2->MaGioHang)
                @foreach ($products as $item1)
                    @if ($item->MaCTDT == $item1->MaCTDT)
                        @php($totalprice += $item->SL * $item1->GiaTienBan)
                    @endif
                @endforeach
            @endif
        @endforeach
    @endforeach
    <div id="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Thông Báo : </strong>Bạn chưa nhập đầy đủ thông tin.
    </div>
    <div class="info-cart">
        <div class="goback"><a href="{{ route('GioHang') }}">
                <svg data-v-ce344fe4="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="0.625em"
                    class="svg-inline--fa fa-chevron-left">
                    <path data-v-ce344fe4="" fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"
                        class=""></path>
                </svg>
                Trở về</a></div>
        <p>Thông Tin Đặt Hàng</p>
    </div>
    <div class="info-cart1">
        <div class="status">
            <div class="component">
                <div class="icon">
                    <svg data-v-76247bda="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon-svg">
                        <path data-v-76247bda="" fill="currentColor"
                            d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"
                            class=""></path>
                    </svg>
                </div>
                <p class="tick">Chọn sản phẩm</p>
            </div>
            <span class="else">-------</span>
            <div class="component">
                <div class="icon">
                    <svg data-v-76247bda="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon-svg">
                        <path data-v-76247bda="" fill="currentColor"
                            d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-352 96c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H86.4C74 384 64 375.4 64 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2zM512 312c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"
                            class=""></path>
                    </svg>
                </div>
                <p class="tick">Thông tin đặt hàng</p>
            </div>
            <span class="else-not">-------</span>
            <div class="component">
                <div class="icon-not">
                    <svg data-v-76247bda="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-open"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="icon-svg-not">
                        <path data-v-76247bda="" fill="currentColor"
                            d="M425.7 256c-16.9 0-32.8-9-41.4-23.4L320 126l-64.2 106.6c-8.7 14.5-24.6 23.5-41.5 23.5-4.5 0-9-.6-13.3-1.9L64 215v178c0 14.7 10 27.5 24.2 31l216.2 54.1c10.2 2.5 20.9 2.5 31 0L551.8 424c14.2-3.6 24.2-16.4 24.2-31V215l-137 39.1c-4.3 1.3-8.8 1.9-13.3 1.9zm212.6-112.2L586.8 41c-3.1-6.2-9.8-9.8-16.7-8.9L320 64l91.7 152.1c3.8 6.3 11.4 9.3 18.5 7.3l197.9-56.5c9.9-2.9 14.7-13.9 10.2-23.1zM53.2 41L1.7 143.8c-4.6 9.2.3 20.2 10.1 23l197.9 56.5c7.1 2 14.7-1 18.5-7.3L320 64 69.8 32.1c-6.9-.8-13.5 2.7-16.6 8.9z"
                            class=""></path>
                    </svg>
                </div>
                <p class="tick-not">Hoàn tất đặt hàng</p>
            </div>
        </div>
    </div>
    <form action="{{ route('XacNhanDonHang') }}" method="POST">
        @csrf
        <div class="infor-customer">
            <div class="block-customer">
                <p class="title">Thông tin khách hàng</p>
                <div class="input-customer">
                    <input name="id" value='{{ $detailrowproducts[0]->MaNguoiDung }}' type="hidden">
                    <input id="name" name="name" value='{{ $detailrowproducts[0]->HoTen }}' type="text"
                        placeholder="Họ và tên (bắt buộc)" maxlength="50" value="" class="type-input">
                    @error('name')
                        <p class="description">{{ $message }}</p>
                    @enderror
                    <input id="phone" name="phone" value={{ $detailrowproducts[0]->SDT }} type="text"
                        placeholder="Số điện thoại (bắt buộc)" maxlength="10" value="" class="type-input">
                    @error('phone')
                        <p class="description">{{ $message }}</p>
                    @enderror
                </div>
                <p class="title">Địa chỉ giao hàng</p>
                <div class="address-box">
                    <div class="seed">
                        <div class="address">
                            <select name="country" id="country-dd">
                                <option value="0">Tỉnh/ Thành Phố</option>
                                @foreach ($province as $data)
                                    @foreach ($address as $item)
                                        @if ($item->tinh_id == $data->id)
                                            <option selected value="{{ $data->id }}">{{ $data->tentinh }}</option>
                                        @endif
                                    @endforeach
                                    <option value="{{ $data->id }}">{{ $data->tentinh }}</option>
                                @endforeach
                            </select>
                            @error('country')
                                <p class="description">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="address">
                            <select name="state" id="state-dd">
                                <option value="0">Quận/ Huyện</option>
                                @foreach ($district as $data)
                                    @foreach ($address as $item)
                                        @if ($item->huyen_id == $data->id)
                                            <option selected value="{{ $data->id }}">{{ $data->tenhuyen }}</option>
                                        @break
                                    @endif
                                @endforeach
                                <option value="{{ $data->id }}">{{ $data->tentinh }}</option>
                            @endforeach
                        </select>
                        @error('state')
                            <p class="description">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="address">
                        <select name="ward" id="ward">
                            <option value="0">Xã / Phường</option>
                            @foreach ($ward as $data)
                                @foreach ($address as $item)
                                    @if ($item->xa_id == $data->id)
                                    <option selected value="{{ $data->id }}">{{ $data->tenxa }}</option>
                                    @break
                                    @break
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                    @error('ward')
                        <p class="description">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <input name="addressdetail" id="address" type="text" placeholder="Số Nhà, Tên Đường"
                @foreach ($address as $item)
            @if ($item->chitiet != '') value='{{ $item->chitiet }}'@else value='' @endif @endforeach
                class="type-input">
            @error('addressdetail')
                <p class="description">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
<div class="status-pay">
    <div class="total-price">
        <p class="title-temp">Tổng tiền tạm tính:</p>
        <span class="price">{{ number_format($totalprice) }}₫</span>
    </div>
    <button id="click" type="submit" class="btn">
        Tiếp tục
    </button>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#country-dd').change(function(event) {
            var idCountry = this.value;
            $('#state-dd').html('');

            $.ajax({
                url: "/api/fetch-state",
                type: 'POST',
                dataType: 'json',
                data: {
                    id: idCountry,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $('#state-dd').html('<option value="">Quận/ Huyện </option>');
                    $.each(response.states, function(index, val) {
                        $('#state-dd').append('<option value="' + val.id + '"> ' +
                            val.tenhuyen + ' </option>')
                    });
                    $('#ward').html('<option value="0">Xã/ Phường</option>');
                }
            })
        });
        $('#state-dd').change(function(event) {
            var idState = this.value;
            $('#ward').html('');
            $.ajax({
                url: "/api/fetch-cities",
                type: 'POST',
                dataType: 'json',
                data: {
                    id: idState,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $('#ward').html('<option value="0">Xã/ Phường</option>');
                    $.each(response.cities, function(index, val) {
                        $('#ward').append('<option value="' + val.id + '"> ' + val
                            .tenxa + ' </option>')
                    });
                }
            })
        });
    });
</script>
@endsection
