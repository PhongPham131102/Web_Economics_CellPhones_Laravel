<?php

namespace App\Http\Controllers;

use App\Models\binhluans;
use App\Models\chitietgiohangs;
use App\Models\danhgias;
use App\Models\giohangs;
use App\Models\nguoidungs;
use App\Models\quanhuyens;
use App\Models\tinhthanhphos;
use App\Models\xaphuongs;
use Illuminate\Http\Request;

class DropDownController extends Controller
{
    public function index()
    {
        $counteries = tinhthanhphos::get(['tentinh', 'id']);

        return view('dropdown', compact('counteries'));
    }

    public function fatchState(Request $request)
    {
        $data['states'] = quanhuyens::where('tinh_id', $request->id)->get(['tenhuyen', 'id']);

        return response()->json($data);
    }

    public function fatchCity(Request $request)
    {
        $data['cities'] = xaphuongs::where('huyen_id', $request->id)->get(['tenxa', 'id']);

        return response()->json($data);
    }
    public function star(Request $request)
    {
        setcookie('start', $request->id, time() + 360000, '/');
        setcookie('mactdt', $request->madt, time() + 360000, '/');
        setcookie('noidung', $request->noidung, time() + 360000, '/');
        $data['cities'] = danhgias::get();
        return response()->json($data);
    }
    public function up(Request $request)
    {
        chitietgiohangs::where('MachiTietGioHang', $request->MaCTGH)->update(['SL' => $request->sl]);
        $data['sl'] = chitietgiohangs::where('MachiTietGioHang', $request->MaCTGH)->get();
        return response()->json($data);
    }
    public function down(Request $request)
    {
        chitietgiohangs::where('MachiTietGioHang', $request->MaCTGH)->update(['SL' => $request->sl]);
        $data['sl'] = chitietgiohangs::where('MachiTietGioHang', $request->MaCTGH)->get();
        return response()->json($data);
    }
    public function delete(Request $request)
    {
        chitietgiohangs::where('MachiTietGioHang', $request->MaCTGH)->forceDelete();
        $data['sl'] = chitietgiohangs::where('MachiTietGioHang', $request->MaCTGH)->get();
        return response()->json($data);
    }
    public function comment(Request $request)
    {
        binhluans::create([
            'MaNguoiDung' => $_COOKIE['id'],
            'MaCTDT' => $request->ctdt,
            'NoiDung' => $request->content,
        ]);
        $data['contents'] = binhluans::where('MaCTDT', $request->ctdt)->orderBy('created_at', 'desc')->get();
        $data['user'] = nguoidungs::get();
        return response()->json($data);
    }
}