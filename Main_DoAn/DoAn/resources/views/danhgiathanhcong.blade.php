@extends('layouts.app')
@section('content')
<div class="infor-customer">
<div class="success">
    <img src="img/checked.png" style="height: 50px;width: 50px; margin-left: 230px;
    margin-bottom: 15px;">
    <h4 class="text-center">Đánh Giá Đã Được Gửi</h4>
</div>
</div>
<div class="status-pay">
<a href="{{ route('TrangChu') }}"> <button class="btn-success">
        Quay Về Trang Chủ
    </button></a>
</div>
@endsection