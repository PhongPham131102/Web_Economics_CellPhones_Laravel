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
        Schema::create('chitietgiohangs', function (Blueprint $table) {
            $table->increments('MachiTietGioHang');
            $table->integer('MaGioHang')->unsigned()->index();
            $table->integer('MaCTDT')->unsigned()->index();
            $table->unsignedInteger('SL');
            $table->string('MauSac');
            $table->string('BoNhoTrong');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaGioHang')->references('MaGioHang')->on('giohangs');
            $table->foreign('MaCTDT')->references('MaCTDT')->on('chitietdienthoais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietgiohangs');
    }
};
