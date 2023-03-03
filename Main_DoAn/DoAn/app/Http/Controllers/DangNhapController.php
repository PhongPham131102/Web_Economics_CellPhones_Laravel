<?php

namespace App\Http\Controllers;

use App\Models\diachi;
use App\Models\giohangs;
use App\Models\nguoidungs;

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
        $bo = nguoidungs::where("TenDangNhap", $name)->where('MatKhau', $pass)
            ->exists();
        if ($bo) {
            $is_loggined = 1;
            $id = (nguoidungs::where("TenDangNhap", $name)->where('MatKhau', $pass)->select('MaNguoiDung')->get())[0]->MaNguoiDung;
            $isadmin = (nguoidungs::where("TenDangNhap", $name)->where('MatKhau', $pass)->select('Isadmin')->get())[0]->Isadmin;
            setcookie('is_logged', $is_loggined, time() + 360000, '/');
            setcookie('id', $id, time() + 360000, '/');
            setcookie('isadmin', $isadmin, time() + 360000, '/');
            $check = giohangs::where('MaNguoiDung', $id)->exists();
            if (!$check) {
                giohangs::create([
                    'MaNguoiDung' => $id,
                ]);
                // diachi::create([
                //     'MaNguoiDung' => $id,
                //     'MaNguoiDung' => $id,
                //     'MaNguoiDung' => $id,
                //     'MaNguoiDung' => $id,
                // ]);
            }
            return redirect()->route('TrangChu');
        } else
            return redirect()->route('DangNhap')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');

    }
}