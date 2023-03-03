<?php

namespace App\Http\Controllers;

use App\Models\giohangs;
use App\Models\nguoidungs;
use Illuminate\Http\Request;

class DangKyController extends Controller
{
    public function create()
    {
        return view('DangKy');
    }
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Họ Và Tên Không Được Bỏ Trống Không Được Bỏ Trống.',
            'username.required' => 'Tên Đăng Nhập Không Được Bỏ Trống!',
            'username.unique' => 'Tên Đăng Nhập Đã Tồn Tại!',
            'username.regex' => 'Tên Đăng Nhập KHông Được Chứa Khoảng Trắng Và Ký Tự Đặc Biệt.',
            'password.required' => 'Mật Khẩu Không Được Bỏ Trống.',
            'password.min' => 'Mật Khẩu Phải Trên 8 ký tự.',
            'repassword.same' => 'Mật Khẩu Không Khớp.',
            'phone.required' => 'Số Điện Thoại Không Được Bỏ Trống.',
            'phone.alpha_num' => 'Số Điện Thoại Phải Là Dữ Liệu Số.',
            'phone.digits' => 'Số Điện Thoại Phải Đủ 10 Chữ Số.',
        ];
        $this->validate($request, [
            
            'name' => 'required',
            'username' => 'required|unique:nguoidungs,TenDangNhap|regex:/^[a-zA-Z0-9]+(_]?[a-zA-Z0-9]+)*$/i',
            'password' => 'required|min:8',
            'repassword' => 'same:password',
            'phone' => 'required|alpha_num|digits:10',
        ], $messages);
        nguoidungs::create([
            'HoTen' => $request->name,
            'SDT' => $request->phone,
            'TenDangNhap' => $request->username,
            'MatKhau' => $request->password,
            'Isadmin' => 0,
        ]);

        return redirect()->route('DangNhap')->with('success', 'Đăng ký thành công.');
    }
}