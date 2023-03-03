<?php

namespace App\Http\Controllers;

use App\Models\diachi;
use App\Models\nguoidungs;
use Illuminate\Http\Request;

class TrangCaNhanController extends Controller
{
    public function update(Request $request)
    {
        if ($request->name == '' || $request->phone == '')
            return redirect()->route('TrangCaNhan')->with('fail', 'Bạn Chưa Thay Đổi Thông Tin Nào.');
        else {
            $messages = [
                'name.required' => 'Họ Và Tên Không Được Bỏ Trống Không Được Bỏ Trống.',
                'phone.required' => 'Số Điện Thoại Không Được Bỏ Trống.',
                'phone.alpha_num' => 'Số Điện Thoại Phải Là Dữ Liệu Số.',
                'phone.digits' => 'Số Điện Thoại Phải Đủ 10 Chữ Số.',
            ];
            $this->validate($request, [
                'name' => 'required',
                'phone' => 'required|alpha_num|digits:10',
            ], $messages);
            nguoidungs::where('MaNguoiDung', $request->id)->update(['HoTen' => $request->name, 'SDT' => $request->phone]);
            return redirect()->route('TrangCaNhan')->with('success', 'Cập Nhật Thông Tin Thành Công');
        }
    }
    public function updateaddress(Request $request)
    {
        $messages = [
            'country.not_in' => 'Chưa Chọn Tỉnh',
            'state.not_in' => 'Chưa Chọn Huyện',
            'ward.not_in' => 'Chưa Chọn Xã',
            'addressdetail.required' => 'Chưa Điền Địa Chỉ Giao Hàng.',
        ];
        $this->validate($request, [
            'country' => 'required|not_in:0',
            'state' => 'required|not_in:0',
            'ward' => 'required|not_in:0',
            'addressdetail' => 'required',
        ], $messages);
        $check = diachi::where('MaNguoiDung', $request->id)->exists();
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
        return redirect()->route('TrangCaNhan')->with('success', 'Cập Nhật Địa Chỉ Thành Công');
    }
    public function updatepassword(Request $request)
    {
        $messages = [
            'passold.required' => 'Bạn Chưa Nhập Mật Khẩu Hiện Tại.',
            'password.required' => 'Mật Khẩu Không Được Bỏ Trống.',
            'password.min' => 'Mật Khẩu Phải Trên 8 ký tự.',
            'repassword.same' => 'Mật Khẩu Không Khớp.',
        ];
        $this->validate($request, [
            'passold' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'same:password',
        ], $messages);
        $passold = nguoidungs::where('MaNguoiDung', $request->id)->get()[0]->MatKhau;
        if ($passold != $request->passold) {
            return redirect()->route('CapNhatMatKhau')->with('fail', 'mật khẩu hiện tại không khớp.');
        } else {
            nguoidungs::where('MaNguoiDung', $request->id)->update(['MatKhau' => $request->password]);
            return redirect()->route('TrangCaNhan')->with('success', 'Cập Nhật Mật Khẩu Thành Công');
        }
    }
}