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
        Schema::create('chitiethoadonbans', function (Blueprint $table) {
            $table->string('MaCTHDBan');
            $table->string('MaHoaDon');
            $table->unsignedInteger('SL');
            $table->unsignedInteger('GiaBan');
            $table->integer('MaCTDT')->unsigned()->index();
            $table->primary('MaCTHDBan');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('MaHoaDon')->references('MaHoaDon')->on('hoadonbanhangs');
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
        Schema::dropIfExists('chitiethoadonbans');
    }
};
