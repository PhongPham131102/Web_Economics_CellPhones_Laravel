<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhgias extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaNguoiDung','MaCTDT','SoSao','NoiDung'
    ];
}
