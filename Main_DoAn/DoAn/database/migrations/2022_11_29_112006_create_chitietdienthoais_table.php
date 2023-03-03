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
        Schema::create('chitietdienthoais', function (Blueprint $table) {
            $table->increments('MaCTDT');
            $table->string('MauSac');
            $table->unsignedInteger('GiaTienNhap');
            $table->unsignedInteger('GiaTienBan');
            $table->unsignedInteger('SLTK');
            $table->string('BoNhoTrong');
            $table->string('MaDT');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaDT')->references('MaDT')->on('dienthoais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdienthoais');
    }
};
