
@extends('partials.app')
@section('content')
<div class="filter-cate">
    <div class="ft-cate">
        <a id="tatca" href="#">Tất cả</a>
        <a id="ip14" href="#" >iPhone 14</a>
        <a id="ip13" href="#">iPhone 13</a>
        <a id="ip12" href="#">iPhone 12</a>
        <a id="ip11" href="#">iPhone 11</a>
        <a id="ipse" href="#">iPhone SE</a>
    </div>
    <div class="container-productbox">
        <div id="preloader">
            <ul id="listproduct" class="listing-cate">
                @foreach($dt as $is)
                <li>
                    <a href="{{ route('ChiTietSanPham',['MaSanPham' => $is->MaSanPham]) }}" class="p-img hover-rotate">
                        <label>Mới</label>
                        <img src="{{ asset('./AnhMacDinh/'.$is->MaSanPham.'/'.$is->TenMau.'/1.webp') }}"width="100px">
                    </a>
                    <div class="p-text">
                        <div class="product-infor">
                            <a href="#" class="product-name">
                                <h3>
                                    <div class="text"> {{$is->TenSanPham}}</div>
                                </h3>
                            </a>
                            <div class="product-price">
                                <div class="text-price">Giá chỉ</div>
                                <div class="price">{{ number_format($is->DonGia) }},000 đ</div>
                            </div>
                            <div class="product-detail">
                                <a href="{{ route('ChiTietSanPham',['MaSanPham' => $is->MaSanPham]) }}  " class="btn btn-outline-grayscale btn-md">XEM CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                
            </ul>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tatca').click(function(event) {
            var cha = document.getElementById('listproduct'); //thẻ ul
            for (var i = 0; i < cha.children.length; i++) {
                var chau = cha.children[i]; //thẻ li
                    chau.style.cssText = 'display:block ;';
            }
        });
        $('#ip14').click(function(event) {
            var idState ='iPhone 14';
            var cha = document.getElementById('listproduct'); //thẻ ul
            for (var i = 0; i < cha.children.length; i++) {
                var chau = cha.children[i]; //thẻ li
                var chau1 = chau.children[1]; //thẻ div
                var chau2 = chau1.children[0]; //thẻ div
                var chau3 = chau2.children[0]; //thẻ a
                var chau4 = chau3.children[0]; //thẻ h3
                var chau5 = chau4.children[0]; // thẻ div
                var vla=chau5.innerText;
                if (vla.includes(idState)) {
                    chau.style.cssText = 'display:block ;';
                } else {
                    chau.style.cssText = 'display:none;';
                }
            }
        });
        $('#ip13').click(function(event) {
            var idState ='iPhone 13';
            var cha = document.getElementById('listproduct'); //thẻ ul
            for (var i = 0; i < cha.children.length; i++) {
                var chau = cha.children[i]; //thẻ li
                var chau1 = chau.children[1]; //thẻ div
                var chau2 = chau1.children[0]; //thẻ div
                var chau3 = chau2.children[0]; //thẻ a
                var chau4 = chau3.children[0]; //thẻ h3
                var chau5 = chau4.children[0]; // thẻ div
                var vla=chau5.innerText;
                if (vla.includes(idState)) {
                    chau.style.cssText = 'display:block ;';
                } else {
                    chau.style.cssText = 'display:none;';
                }
            }
        });
        $('#ip12').click(function(event) {
            var idState ='iPhone 12';
            var cha = document.getElementById('listproduct'); //thẻ ul
            for (var i = 0; i < cha.children.length; i++) {
                var chau = cha.children[i]; //thẻ li
                var chau1 = chau.children[1]; //thẻ div
                var chau2 = chau1.children[0]; //thẻ div
                var chau3 = chau2.children[0]; //thẻ a
                var chau4 = chau3.children[0]; //thẻ h3
                var chau5 = chau4.children[0]; // thẻ div
                var vla=chau5.innerText;
                if (vla.includes(idState)) {
                    chau.style.cssText = 'display:block ;';
                } else {
                    chau.style.cssText = 'display:none;';
                }
            }
        });
        $('#ip11').click(function(event) {
            var idState ='iPhone 11';
            var cha = document.getElementById('listproduct'); //thẻ ul
            for (var i = 0; i < cha.children.length; i++) {
                var chau = cha.children[i]; //thẻ li
                var chau1 = chau.children[1]; //thẻ div
                var chau2 = chau1.children[0]; //thẻ div
                var chau3 = chau2.children[0]; //thẻ a
                var chau4 = chau3.children[0]; //thẻ h3
                var chau5 = chau4.children[0]; // thẻ div
                var vla=chau5.innerText;
                if (vla.includes(idState)) {
                    chau.style.cssText = 'display:block ;';
                } else {
                    chau.style.cssText = 'display:none;';
                }
            }
        });
        $('#ipse').click(function(event) {
            var idState ='iPhone SE';
            var cha = document.getElementById('listproduct'); //thẻ ul
            for (var i = 0; i < cha.children.length; i++) {
                var chau = cha.children[i]; //thẻ li
                var chau1 = chau.children[1]; //thẻ div
                var chau2 = chau1.children[0]; //thẻ div
                var chau3 = chau2.children[0]; //thẻ a
                var chau4 = chau3.children[0]; //thẻ h3
                var chau5 = chau4.children[0]; // thẻ div
                var vla=chau5.innerText;
                if (vla.includes(idState)) {
                    chau.style.cssText = 'display:block ;';
                } else {
                    chau.style.cssText = 'display:none;';
                }
            }
        });
    });
</script>
@endsection