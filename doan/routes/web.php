<?php
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\DangKyController;
use App\Models\baiviet; 
use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\mausac; 
use App\Models\sanpham;
use App\Models\chitietgiohangs;
use App\Models\giohangs;
use App\Models\chitietsanpham;
use App\Models\taikhoan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/TrangChu', function () {
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=chitietsanpham::join('mausacs','mausacs.MaSanPham',"=",'chitietsanphams.MaSanPham')->join('sanphams','chitietsanphams.MaSanPham',"=",'sanphams.MaSanPham')->get();
        return view('TrangChu',array(
            'dt'=>$dt,
            "giohang"=>$giohang
        ));
    })->name('TrangChu');
Route::get('/', function () {
    $dt=chitietsanpham::join('mausacs','mausacs.MaSanPham',"=",'chitietsanphams.MaSanPham')->join('sanphams','chitietsanphams.MaSanPham',"=",'sanphams.MaSanPham')->get();
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    return view('TrangChu',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
});
Route::get('/ChiTietSanPham/{MaSanPham}/{Mau}', function ($MaSanPham,$Mau) {
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('sanphams.MaSanPham',$MaSanPham)->join('chitietsanphams','sanphams.MaSanPham','chitietsanphams.MaSanPham')->join('mausacs','mausacs.MaSanPham','chitietsanphams.MaSanPham')->get();
    $baiviets = baiviet::get();
    return view('ChiTietSanPham',array(
        'dt'=>$dt,
        'baiviets'=>$baiviets,
        'mausac'=>$Mau,
        "giohang"=>$giohang
    ));
})->name('ChiTietSanPham');

Route::get('/DSSanPham', function () {
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();

    $dt=sanpham::get();
    return view('DSSanPham',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
});
Route::post('TimKiem',[SearchController::class,'seacrh'])->name('TimKiem');

Route::get('TimKiem1/{content}',function($content){
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('TenSanPham','LIKE',"%{$content}%")->get();
    return view('DSSanPham',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
})->name('TimKiem1');

Route::get('Iphone14',function(){
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('TenSanPham','LIKE',"%Iphone 14%")->get();
    return view('DSSanPham',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
})->name('Iphone14');

Route::get('Iphone13',function(){
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('TenSanPham','LIKE',"%Iphone 13%")->get();
    return view('DSSanPham',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
})->name('Iphone13');

Route::get('Iphone12',function(){
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('TenSanPham','LIKE',"%Iphone 12%")->get();
    return view('DSSanPham',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
})->name('Iphone12');

Route::get('Iphone11',function(){
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('TenSanPham','LIKE',"%Iphone 11%")->get();
    return view('DSSanPham',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
})->name('Iphone11');

Route::get('IphoneSE',function(){
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('TenSanPham','LIKE',"%Iphone SE%")->get();
    return view('DSSanPham',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
})->name('IphoneSE');
Route::get('buynow/{MaSanPham}/{MaChiTietSanPham}/{MauSac}',function($MaSanPham,$MaChiTietSanPham,$MauSac){
    $dt=sanpham::where('sanphams.MaSanPham',$MaSanPham)->join('chitietsanphams','sanphams.MaSanPham','chitietsanphams.MaSanPham')->join('mausacs','mausacs.MaSanPham','chitietsanphams.MaSanPham')->where('mausacs.TenMau',$MauSac)->get();
    $giohang=giohangs::where('MaNguoiDung',1)->get();
    $magiohang=$giohang[0]->MaGioHang;
    $mactsp=$dt[0]->MaChiTietSanpham;
    $sl=1;
    $mau=$dt[0]->TenMau;
    $rom=$dt[0]->BoNhoTrong;
    $chitietgiohang=chitietgiohangs::get();
    $check=0;
    foreach($chitietgiohang as $item)
    {
        if($item->MaChiTietSanpham==$mactsp&&$item->MauSac==$MauSac&&$item->BoNhoTrong==$rom)
        {
            $check=1;
            $sl=$item->SL;
            break;
        }
    }
    if($check==1)
    {
        $sl++;
        chitietgiohangs::where('MaChiTietSanpham',$mactsp)->where('MauSac',$MauSac)->where('BoNhoTrong',$rom)->update(['Sl'=>$sl]);
        return redirect()->route('ChiTietSanPham', ['MaSanPham' => $MaSanPham,'Mau'=>$MauSac ]);
    }
    if($check==0)
    {
        chitietgiohangs::insert([
            'MaGioHang'=>$magiohang,
            'MaChiTietSanpham'=>$mactsp,
            'MauSac'=> $mau,
            'SL'=>$sl,
            'BoNhoTrong'=> $rom,
        ]);
        return redirect()->route('GioHang');
    }

})->name('buynow');
Route::get('add/{MaSanPham}/{MaChiTietSanPham}/{MauSac}',function($MaSanPham,$MaChiTietSanPham,$MauSac){
    $dt=sanpham::where('sanphams.MaSanPham',$MaSanPham)->join('chitietsanphams','sanphams.MaSanPham','chitietsanphams.MaSanPham')->join('mausacs','mausacs.MaSanPham','chitietsanphams.MaSanPham')->where('mausacs.TenMau',$MauSac)->get();
    $giohang=giohangs::where('MaNguoiDung',1)->get();
    $magiohang=$giohang[0]->MaGioHang;
    $mactsp=$dt[0]->MaChiTietSanpham;
    $sl=1;
    $mau=$dt[0]->TenMau;
    $rom=$dt[0]->BoNhoTrong;
    $chitietgiohang=chitietgiohangs::get();
    $check=0;
    foreach($chitietgiohang as $item)
    {
        if($item->MaChiTietSanpham==$mactsp&&$item->MauSac==$MauSac&&$item->BoNhoTrong==$rom)
        {
            $check=1;
            $sl=$item->SL;
            break;
        }
    }
    if($check==1)
    {
        $sl++;
        chitietgiohangs::where('MaChiTietSanpham',$mactsp)->where('MauSac',$MauSac)->where('BoNhoTrong',$rom)->update(['Sl'=>$sl]);
        return redirect()->route('ChiTietSanPham', ['MaSanPham' => $MaSanPham,'Mau'=>$MauSac ]);
    }
    if($check==0)
    {
        chitietgiohangs::insert([
            'MaGioHang'=>$magiohang,
            'MaChiTietSanpham'=>$mactsp,
            'MauSac'=> $mau,
            'SL'=>$sl,
            'BoNhoTrong'=> $rom,
        ]);
        return redirect()->route('ChiTietSanPham', ['MaSanPham' => $MaSanPham,'Mau'=>$MauSac ]);
    }

})->name('add');
Route::get('/GioHang', function () {
    $detailcart = chitietgiohangs::get();
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $products = sanpham::join('chitietsanphams', 'sanphams.MaSanPham', '=', 'chitietsanphams.MaSanPham')->join('mausacs','mausacs.MaSanPham','chitietsanphams.MaSanPham')->get();
    $detailrowproducts = taikhoan::where("taikhoans.id",1)->join('giohangs', 'taikhoans.id', '=', 'giohangs.MaNguoiDung')->get();
    return view(
        'GioHang',
        array(
            'products' => $products,
            'detailrowproducts' => $detailrowproducts,
            'detailcart' => $detailcart,
            "giohang"=>$giohang
        )
    );
})->name("GioHang");
Route::get('/DatHang', function () {
    $nguoidung = taikhoan::where("taikhoans.id", 1)->get();
    $detailcart = chitietgiohangs::get();
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $products = sanpham::join('chitietsanphams', 'sanphams.MaSanPham', '=', 'chitietsanphams.MaSanPham')->join('mausacs','mausacs.MaSanPham','chitietsanphams.MaSanPham')->get();
    $detailrowproducts = taikhoan::where("taikhoans.id",1)->join('giohangs', 'taikhoans.id', '=', 'giohangs.MaNguoiDung')->get();
    return view(
        'DatHang',
        array(
            'products' => $products,
            'detailrowproducts' => $detailrowproducts,
            'detailcart' => $detailcart,
            "giohang"=>$giohang,
            "nguoidung"=>$nguoidung
        )
    );
})->name("DatHang");
Route::get('/DatHang1', function () {
    $nguoidung = taikhoan::where("taikhoans.id", 1)->get();
    $detailcart = chitietgiohangs::get();
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $products = sanpham::join('chitietsanphams', 'sanphams.MaSanPham', '=', 'chitietsanphams.MaSanPham')->join('mausacs','mausacs.MaSanPham','chitietsanphams.MaSanPham')->get();
    $detailrowproducts = taikhoan::where("taikhoans.id",1)->join('giohangs', 'taikhoans.id', '=', 'giohangs.MaNguoiDung')->get();
    $number = rand(0, 10000);
    $current = Carbon::now();
    $totalprice = 0;
foreach ($detailcart as $row)
    {   if ($row->MaGioHang==1)
       { foreach ($products as $product)
     {   if ($product->MaChiTietSanpham == $row->MaChiTietSanpham && $product->TenMau == $row->MauSac)
     {
                    $totalprice += $product->DonGia;
    }
    }
    }  
}
    hoadon::insert([
        'id' => $number,
        'NgayLap' => $current,
        'TongTien' => $totalprice,
        'idTaikhoan' => 1,
    ]);
    foreach ($detailcart as $row)
    {   if ($row->MaGioHang==1)
       { foreach ($products as $product)
     {   if ($product->MaChiTietSanpham == $row->MaChiTietSanpham && $product->TenMau == $row->MauSac)
     {
                   chitiethoadon::insert([
                    'GiaBan' =>$product->DonGia,
                    'SoLuong' => $row->SL,
                    'MaChiTietSanPham' => $product->MaChiTietSanpham,
                    'idHoaDon' => $number,
                ]);
    }
    }
    }  
}
chitietgiohangs::where('MaGioHang', 1)->delete();
    return redirect()->route('DatHangThanhCong');
})->name("DatHang1");

Route::get('DatHangThanhCong',function(){
    $giohang = giohangs::where("MaNguoiDung", 1)->join("chitietgiohangs", "giohangs.MaGioHang", "=", "chitietgiohangs.MaGioHang")->count();
    $dt=sanpham::where('TenSanPham','LIKE',"%Iphone 13%")->get();
    return view('DatHangThanhCong',array(
        'dt'=>$dt,
        "giohang"=>$giohang
    ));
})->name('DatHangThanhCong');