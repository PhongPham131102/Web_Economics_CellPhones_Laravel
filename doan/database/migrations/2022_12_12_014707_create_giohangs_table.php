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
        Schema::create('giohangs', function (Blueprint $table) {
            $table->increments('MaGioHang');
            $table->unsignedInteger('MaNguoiDung');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaNguoiDung')->references('id')->on('taikhoans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giohangs');
    }
};
