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
        Schema::create('hoadonbanhangs', function (Blueprint $table) {
            $table->string('MaHoaDon');
            $table->dateTime('NgayLap');
            $table->unsignedInteger('TongTien');
            $table->boolean('TTDonHang');
            $table->integer('MaNguoiDung')->unsigned()->index();
            $table->primary('MaHoaDon');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaNguoiDung')->references('MaNguoiDung')->on('nguoidungs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonbanhangs');
    }
};
