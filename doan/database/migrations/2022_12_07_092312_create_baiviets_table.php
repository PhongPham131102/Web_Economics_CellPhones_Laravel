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
        Schema::create('baiviets', function (Blueprint $table) {
            $table->id();
            $table->string('MaLoaiSanPham');
            $table->longText('tieude');
            $table->string('img');
            $table->longText('noidung');
            $table->timestamps();
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
        Schema::dropIfExists('baiviets');
    }
};
