<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nguoidungs extends Model
{
    use HasFactory;
    protected $fillable = [
        'HoTen', 
        'SDT',
        'TenDangNhap',
        'MatKhau',
        'Isadmin',
    ];
}
