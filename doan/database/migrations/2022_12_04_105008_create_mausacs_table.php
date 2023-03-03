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
        Schema::create('mausacs', function (Blueprint $table) {
            $table->increments('STT');
            $table->string('TenMau');
            $table->string('HinhAnh');
            $table->string('MaSanPham');
            $table->foreign('MaSanPham')->references('MaSanPham')->on('sanphams');
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
        Schema::dropIfExists('mausacs');
    }
};
