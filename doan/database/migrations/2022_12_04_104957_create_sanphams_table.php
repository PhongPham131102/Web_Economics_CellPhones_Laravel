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
        Schema::create('sanphams', function (Blueprint $table) {
            $table->string('MaSanPham');
            $table->string('TenSanPham');
            $table->unique('TenSanPham',50);
            $table->integer('DonGia');
            $table->string('AnhMacDinh');
            $table->string('MaLoaiSanPham');
            $table->boolean('TrangThai')->default(1);
            $table->primary('MaSanPham');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaLoaiSanPham')->references('MaLoaiSanPham')->on('loaisanphams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanphams');
    }
};
