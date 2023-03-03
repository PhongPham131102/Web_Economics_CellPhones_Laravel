<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenDangNhap');
            $table->unique('TenDangNhap');
            $table->string('MatKhau');
            $table->string('Email');
            $table->unique('Email');
            $table->string('DiaChi');
            $table->string('HoTen');
            $table->string('SDT');
            $table->unique('SDT');
            $table->boolean('TrangThai')->default(1);
            $table->boolean('QuanTri')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taikhoans');
    }
};
