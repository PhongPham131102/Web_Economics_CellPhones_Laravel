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
        Schema::create('chitiethoadons', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('SoLuong')->default(1);
            $table->unsignedInteger('GiaBan');
            $table->string('MaChiTietSanPham');
            $table->integer('idHoaDon')->unsigned()->index();
            $table->foreign('idHoaDon')->references('id')->on('hoadons'); 
            $table->foreign('MaChiTietSanPham')->references('MaChiTietSanPham')->on('chitietsanphams');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadons');
    }
};
