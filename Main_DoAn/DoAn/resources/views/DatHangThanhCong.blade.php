@extends('layouts.app')
@section('content')
    @php($tentinh = '')
    @php($tenhuyen = '')
    @php($tenxa = '')
    {{-- lấy tên tỉnh --}}
    @foreach ($province as $data)
        @if ($address[0]->tinh_id == $data->id)
            @php($tentinh = $data->tentinh)
        @endif
    @endforeach
    {{-- lấy tên huyện --}}
    @foreach ($district as $data)
        @if ($address[0]->huyen_id == $data->id)
            @php($tenhuyen = $data->tenhuyen)
        @endif
    @endforeach
    {{-- lấy tên xã --}}
    @foreach ($ward as $data)
        @if ($address[0]->xa_id == $data->id)
            @php($tenxa = $data->tenxa)
        @endif
    @endforeach
    <div class="infor-customer">
        <div class="success">
            <img src="{{ asset('img/checked.png') }}" style="height: 50px;width: 50px; margin-left: 230px;
			margin-bottom: 15px;">
            <h4 class="text-center">Đặt Hàng Thành Công</h4>
            <div class="confirm-info">
                <p>
                    <span>Người Nhận :</span>
                    {{ $detailrowproducts[0]->HoTen }}
                </p>
            </div>
            <div class="confirm-info">
                <p>
                    <span>Số Điện Thoại :</span>
                    {{ $detailrowproducts[0]->SDT }}
                </p>
            </div>
            <div class="confirm-info">
                <p>
                    <span>Địa Chỉ Nhận Hàng:</span>
                    {{ $address[0]->chitiet . ',' . $tenxa . ',' . $tenhuyen . ',' . $tentinh }}
                </p>
            </div>
            <div class="confirm-info">
                <p>
                    <span>Hình Thức Thanh Toán :</span>
                    Thanh toán khi nhận hàng.
                </p>
            </div>
            <div class="confirm-info">
                <p>
                    <span>Tổng Tiền :</span>
                    {{ number_format($total) }}₫
                </p>
            </div>
        </div>
    </div>
    <div class="status-pay">
		<a href="{{ route('TrangChu') }}"> <button class="btn-success">
				Quay Về Trang Chủ
			</button></a>
	</div>
@endsection
