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
        Schema::create('dienthoais', function (Blueprint $table) {
            $table->string('MaDT');
            $table->string('TenDT');
            $table->string('ManHinh');
            $table->string('HeDieuHanh');
            $table->string('Ram');
            $table->string('Pin');
            $table->string('Sim');
            $table->string('Chip');
            $table->string('CameraTruoc');
            $table->string('CameraSau');
            $table->string('HangSX');
            $table->unsignedBigInteger('GiaBanChung');
            $table->string('Img');
            $table->integer('MaLoai')->unsigned()->index();
            $table->primary('MaDT');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaLoai')->references('MaLoai')->on('loaisanphams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dienthoais');
    }
};
