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
        Schema::create('danhgias', function (Blueprint $table) {
            $table->id();
            $table->integer('MaNguoiDung')->unsigned()->index();
            $table->integer('MaCTDT')->unsigned()->index();
            $table->unsignedInteger('SoSao');
            $table->string('NoiDung');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaNguoiDung')->references('MaNguoiDung')->on('nguoidungs');
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
        Schema::dropIfExists('danhgias');
    }
};
