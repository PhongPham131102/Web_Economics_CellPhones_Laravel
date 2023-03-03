<?php

namespace App\Http\Controllers;

use App\Models\chitietdienthoais;
use App\Models\chitiethoadonbans;
use App\Models\diachi;
use App\Models\dienthoais;
use App\Models\hoadonbanhangs;
use App\Models\nguoidungs;
use Illuminate\Http\Request;

class ChiTietHoaDonController extends Controller
{
    public function check(Request $request)
    {
        $messages = [
            'name.required' => 'Họ Và Tên Không Được Bỏ Trống Không Được Bỏ Trống.',
            'phone.required' => 'Số Điện Thoại Không Được Bỏ Trống.',
            'phone.alpha_num' => 'Số Điện Thoại Phải Là Dữ Liệu Số.',
            'phone.digits' => 'Số Điện Thoại Phải Đủ 10 Chữ Số.',
            'country.not_in' => 'Chưa Chọn Tỉnh',
            'state.not_in' => 'Chưa Chọn Huyện',
            'ward.not_in' => 'Chưa Chọn Xã',
            'addressdetail.required' => 'Chưa Điền Địa Chỉ Giao Hàng.',
        ];
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|alpha_num|digits:10',
            'country' => 'required|not_in:0',
            'state' => 'required|not_in:0',
            'ward' => 'required|not_in:0',
            'addressdetail' => 'required',
        ], $messages);
        nguoidungs::where('MaNguoiDung', $request->id)->update(['HoTen' => $request->name, 'SDT' => $request->phone]);
        // $check = diachi::where('MaNguoiDung', $request->id)->exists();
        $check = diachi::where('MaNguoiDung', $request->id)->count();
        if ($check > 0) {
            diachi::where('MaNguoiDung', $request->id)->update(['tinh_id' => $request->country, 'huyen_id' => $request->state, 'xa_id' => $request->ward, 'chitiet' => $request->addressdetail]);
        } else {
            diachi::insert([
                'chitiet' => $request->addressdetail,
                'MaNguoiDung' => $request->id,
                'tinh_id' => $request->country,
                'huyen_id' => $request->state,
                'xa_id' => $request->ward,
            ]);
        }
        return redirect()->route('XacNhanThongTin');
    }
    public function update(Request $request)
    {
        hoadonbanhangs::where('MaHoaDon', $request->MaDonHang)->update(['TTDonHang' => 1]);
        return redirect()->route('ChiTietDonHangAdmin', ['MaDH' => $request->MaDonHang, 'MaNguoiDung' => $request->MaNguoiDung])->with('success', 'Cập Nhật Thông Tin Thành Công');
    }
    public function delete(Request $request)
    {
        chitiethoadonbans::where('MaHoaDon', $request->MaDonHang)->delete();
        hoadonbanhangs::where('MaHoaDon', $request->MaDonHang)->delete();
        return redirect()->route('QuanLyDonHang')->with('success', 'Đã Hủy Đơn Hàng ' . $request->MaDonHang . ' Thành Công.');
    }
    public function updatesanpham(Request $request)
    {
        // if ($request->name == '' || $request->phone == '')
        //     return redirect()->route('TrangCaNhan')->with('fail', 'Bạn Chưa Thay Đổi Thông Tin Nào.');
        // else {
        //     $messages = [
        //         'name.required' => 'Họ Và Tên Không Được Bỏ Trống Không Được Bỏ Trống.',
        //         'phone.required' => 'Số Điện Thoại Không Được Bỏ Trống.',
        //         'phone.alpha_num' => 'Số Điện Thoại Phải Là Dữ Liệu Số.',
        //         'phone.digits' => 'Số Điện Thoại Phải Đủ 10 Chữ Số.',
        //     ];
        //     $this->validate($request, [
        //         'name' => 'required',
        //         'phone' => 'required|alpha_num|digits:10',
        //     ], $messages);
        chitietdienthoais::where('MaCTDT', $request->MaCTDT)->update(['MauSac' => $request->color, 'GiaTienBan' => $request->giaban,
         'SLTK' => $request->sltk,
         'BoNhoTrong' => $request->rom]);
         dienthoais::where('MaDT', $request->MaDT)->update(['TenDT' => $request->tensp, 'ManHinh' => $request->manhinh,
         'HeDieuHanh' => $request->sltk
         , 'Ram' => $request->ram
         , 'Pin' => $request->pin
         , 'Sim' => $request->sim
         , 'Chip' => $request->chip
         , 'CameraTruoc' => $request->cmrtruoc
         , 'CameraSau' => $request->cmrsau]);
        return redirect()->route('XemChiTietSanPhamAdmin', ['MaCTDT' => $request->MaCTDT])->with('success', 'Cập Nhật Thông Tin Sản Phẩm '. $request->tensp.' '. $request->color.' '. $request->rom.' Thành Công');
    }
}