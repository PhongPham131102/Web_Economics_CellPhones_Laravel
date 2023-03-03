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
        Schema::create('chitietsanphams', function (Blueprint $table) {
            $table->string('MaChiTietSanpham');
            $table->string('KichThuocManHinh');
            $table->string('CameraSau');
            $table->string('CameraTruoc');
            $table->string('ChipSet');
            $table->string('BoNhoTrong');
            $table->string('Ram');
            $table->string('Pin');
            $table->string('TheSim');
            $table->string('HeDieuHanh');
            $table->Integer('SoLuongTonKho');
            $table->string('MaSanPham');
            $table->primary('MaChiTietSanpham');
            $table->softDeletes();
            $table->foreign('MaSanPham')->references('MaSanPham')->on('sanphams');
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
        Schema::dropIfExists('chitietsanphams');
    }
};
