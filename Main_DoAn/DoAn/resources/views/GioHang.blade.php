@extends('layouts.app')
@section('content')
    @php($sl = 0)
    @foreach ($detailcart as $item)
        @if ($item->MaGioHang == $quantityphone[0]->MaGioHang)
            @php($sl += 1)
        @endif
    @endforeach
    @if ($sl == 0)
        <div  class="notcart">
            <svg data-v-0283e6c8="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="frown" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-frown">
                <path data-v-0283e6c8="" fill="currentColor"
                    d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm80 168c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zm-160 0c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zm170.2 218.2C315.8 367.4 282.9 352 248 352s-67.8 15.4-90.2 42.2c-13.5 16.3-38.1-4.2-24.6-20.5C161.7 339.6 203.6 320 248 320s86.3 19.6 114.7 53.8c13.6 16.2-11 36.7-24.5 20.4z"
                    class=""></path>
            </svg>
            <p>Không có sản phẩm nào trong giỏ hàng, vui lòng quay lại</p>
            <a href="{{ route('TrangChu') }}" class="go-back">Quay lại trang chủ</a>
        </div>
    @else
    <div style="display:none" id="change" class="notcart"></div>
        <div id="all" class="tranggiohang">
            <div class="container">
                <div class="row ttsp">
                    <span class="col-md-5 sp">Sản Phẩm</span>
                    <span class="col-md-2">Đơn Giá</span>
                    <span class="col-md-2">Số Lượng</span>
                    <span class="col-md-2">Số Tiền</span>
                    <span class="col-md-1">Thao tác</span>
                </div>
            </div>
            @php($total = 0)
            <div id="sosp" class="container">
                @foreach ($detailcart as $row)
                    @if ($row->MaGioHang == $quantityphone[0]->MaGioHang)
                        @foreach ($products as $product)
                            @if ($product->MaCTDT == $row->MaCTDT)
                                <div class="row sanpham">
                                    <span class="col-md-1 check"></span>
                                    <span class="col-md-4 tensanpham">
                                        <img class="anhchuyen"
                                            src="{{ asset('img/' . $product->HangSX . '/' . $product->MaDT . '/' . $product->MauSac . '/1.jpg') }}"
                                            alt="thaythe">
                                        <span>{{ Str::of($product->TenDT)->replace('.', $product->BoNhoTrong . ' ' . $product->MauSac) }}</span>
                                    </span>
                                    <span id="Price" class="col-md-2 giamd">{{ number_format($product->GiaTienBan) }}
                                        đ</span>
                                    <div class="col-md-2 soluong">
                                        <span onclick="giamsl(event)" id="giam" class="giam">-</span>
                                        <input id="Sl" readonly="readonly" class="sl" type="text"
                                            value={{ $row->SL }} />
                                        <input name="MaCTGH" type=hidden value={{ $row->MachiTietGioHang }} />
                                        <span onclick="tangsl(event)" id="tang" class="tang">+</span>
                                    </div>
                                    <span id="totalmoney"
                                        class="col-md-2 money1">{{ number_format($product->GiaTienBan * $row->SL) }}
                                        đ</span>
                                    <span id="delete" onclick="deleted(event)" class="col-md-1 xoa">Xóa</span>
                                </div>

                                @php($total += $product->GiaTienBan * $row->SL)
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
            <div class="total">
                <div class="benphai">
                    <span id="tongtien"> {{ number_format($total) }} đ</span>
                    <div class='button'><a href="{{ route('XacNhan') }}">Đặt Hàng</a></div>
                </div>

            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript">
        function tinhtong() {
            var sotien = 0;
            var checknullprice = 0;
            var sosp = document.getElementById('sosp');
            var spct = sosp.children;
            var sll = spct.length;
            document.getElementById('giohang').innerHTML = "" + sll;
            for (let i = 0; i < spct.length; i++) {

                var spct1 = spct[i];
                var price = spct1.children[4].innerHTML;
                var price = price.replaceAll('đ', '');
                var price = price.replaceAll(',', '');
                var price = parseInt(price);
                sotien += price;
                checknullprice = sotien;
            }
            sotien = Intl.NumberFormat().format(sotien);
            sotien = sotien + ' đ';
            document.getElementById('tongtien').innerHTML = sotien;
            if (checknullprice == 0) {
                document.getElementById('all').innerHTML = "";
                document.getElementById('change').style.cssText='display:block;';
                $('#change').html('<svg data-v-0283e6c8="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="frown" role="img"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-frown">               <path data-v-0283e6c8="" fill="currentColor"                   d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm80 168c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zm-160 0c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zm170.2 218.2C315.8 367.4 282.9 352 248 352s-67.8 15.4-90.2 42.2c-13.5 16.3-38.1-4.2-24.6-20.5C161.7 339.6 203.6 320 248 320s86.3 19.6 114.7 53.8c13.6 16.2-11 36.7-24.5 20.4z"                   class=""></path>            </svg>           <p>Không có sản phẩm nào trong giỏ hàng, vui lòng quay lại</p>            <a href="{{ route('TrangChu') }}" class="go-back">Quay lại trang chủ</a>');
                }

            }

            function tangsl(event) {
                //trỏ đến thẻ đang được click
                var con = event.target;
                //trỏ đến thẻ cha của thẻ con đã được click ở trên
                var cha = con.parentElement;
                //lấy con thứ 2 của thẻ cha tương ứng mảng vị trí thứ nhất
                var input1 = cha.children[1];
                //lấy con thứ 2 của thẻ cha tương ứng mảng vị trí thứ hai
                var input2 = cha.children[2];
                //lấy giá trị của con thứ 2
                var sl = input1.value;
                //lấy giá trị của con thứ 3
                var MaCTGH = input2.value;
                sl = parseInt(sl);
                sl += 1;
                //lấy cha của cha 
                var chacuacha = cha.parentElement;

                $.ajax({
                    url: "/api/up",
                    type: 'POST',
                    data: {
                        sl: sl,
                        MaCTGH: MaCTGH,
                        _token: "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function(response) {
                        $.each(response.sl, function(index, val) {
                            input1.value = val.SL;
                        });
                        var prire = chacuacha.children[2].innerHTML;
                        var prire = prire.replaceAll('đ', '');
                        var prire = prire.replaceAll(',', '');
                        var prire = parseInt(prire);
                        var total = prire * input1.value;
                        total = Intl.NumberFormat().format(total);
                        total = total + ' đ';
                        chacuacha.children[4].innerHTML = total;
                        tinhtong();
                    }
                })

            }

            function giamsl(event) {
                //trỏ đến thẻ đang được click
                var con = event.target;
                //trỏ đến thẻ cha của thẻ con đã được click ở trên
                var cha = con.parentElement;
                //lấy con thứ 2 của thẻ cha tương ứng mảng vị trí thứ nhất
                var input1 = cha.children[1];
                //lấy con thứ 2 của thẻ cha tương ứng mảng vị trí thứ hai
                var input2 = cha.children[2];
                //lấy giá trị của con thứ 2
                var sl = input1.value;
                //lấy giá trị của con thứ 3
                var MaCTGH = input2.value;
                sl = parseInt(sl);
                if (sl == 1)
                    sl == 1;
                else
                    sl -= 1;
                //lấy cha của cha 
                var chacuacha = cha.parentElement;

                $.ajax({
                    url: "/api/up",
                    type: 'POST',
                    data: {
                        sl: sl,
                        MaCTGH: MaCTGH,
                        _token: "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function(response) {
                        $.each(response.sl, function(index, val) {
                            input1.value = val.SL;
                        });
                        var prire = chacuacha.children[2].innerHTML;
                        var prire = prire.replaceAll('đ', '');
                        var prire = prire.replaceAll(',', '');
                        var prire = parseInt(prire);
                        var total = prire * input1.value;
                        total = Intl.NumberFormat().format(total);
                        total = total + ' đ';
                        chacuacha.children[4].innerHTML = total;
                        tinhtong();
                    }
                })

            }

            function deleted(event) {
                //trỏ đến thẻ đang được click
                var con = event.target;
                //trỏ đến thẻ cha của thẻ con đã được click ở trên
                var cha = con.parentElement;
                var con3 = cha.children[3];
                //lấy con thứ 3 của thẻ cha tương ứng mảng vị trí thứ hai
                var input2 = con3.children[2];
                //lấy giá trị của con thứ 3
                var MaCTGH = input2.value;
                if (confirm("Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng ?") == true)
                    $.ajax({
                        url: "/api/delete",
                        type: 'POST',
                        data: {
                            MaCTGH: MaCTGH,
                            _token: "{{ csrf_token() }}"
                        },
                        cache: false,
                        success: function(response) {
                            con.parentElement.remove();
                            tinhtong();
                        }
                    })
            }
    </script>
@endsection
