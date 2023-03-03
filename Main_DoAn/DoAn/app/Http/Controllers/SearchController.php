<?php

namespace App\Http\Controllers;
use App\Models\chitietdienthoais;
use App\Models\chitietgiohangs;
use App\Models\dienthoais;
use App\Models\nguoidungs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(request $request)
    {
        $colors = chitietdienthoais::select('MaDT', 'BoNhoTrong', 'MauSac')->get();
        $ctdts = chitietdienthoais::select('MaDT', 'BoNhoTrong', 'GiaTienBan')->groupBy('MaDT', 'BoNhoTrong', 'GiaTienBan')->inRandomOrder()->get();
        $dts = dienthoais::where('TenDT','LIKE',"%{$request->content}%")->get();
        if ($_COOKIE['is_logged']) {
            $user = nguoidungs::where("MaNguoiDung", $_COOKIE['id'])->get();
            $detailcart = chitietgiohangs::get();
            $quantityphone = nguoidungs::where("nguoidungs.MaNguoiDung", $_COOKIE['id'])->join('giohangs', 'nguoidungs.MaNguoiDung', '=', 'giohangs.MaNguoiDung')->get();
    
            return view(
                'DienThoai',
                array(
                    'ctdts' => $ctdts,
                    'dts' => $dts,
                    'colors' => $colors,
                    'user' => $user,
                    'quantityphone' => $quantityphone,
                    'detailcart' => $detailcart,
                )
            );
        } else {
            return view('DienThoai', array('ctdts' => $ctdts, 'dts' => $dts, 'colors' => $colors));
        }
    }
}
