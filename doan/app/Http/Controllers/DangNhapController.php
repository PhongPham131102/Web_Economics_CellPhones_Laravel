<?php

namespace App\Http\Controllers;
use App\Models\taikhoan;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DangNhapController extends Controller
{
    public function show()
    {
        return view('DangNhap');
    }
    public function check(Request $request)
    {
        $messages = [
            'username.required' => 'Bạn Chưa Điền Thông Tin Đăng Nhập',
        ];
        $this->validate($request, [
            'username' => 'required',
        ], $messages);

        $name = $request->username;
        $pass = $request->password;
        $bo = taikhoan::where("TenDangNhap", $name)->where('MatKhau', $pass)
            ->exists();
        if ($bo) {
            $is_loggined = true;
            $id = (taikhoan::where("TenDangNhap", $name)->where('MatKhau', $pass)->select('id')->get())[0]->id;
            setcookie('is_logged', $is_loggined, time() + 360000, '/');
            setcookie('id', $id, time() + 360000, '/');
        } else
            return redirect()->route('DangNhap')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');

    }
}