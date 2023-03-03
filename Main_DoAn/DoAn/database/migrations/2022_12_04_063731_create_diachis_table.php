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
        Schema::create('diachis', function (Blueprint $table) {
            $table->id();
            $table->integer('MaNguoiDung')->unsigned()->index();
            $table->string('chitiet');
            $table->integer('tinh_id')->unsigned()->index();
            $table->integer('huyen_id')->unsigned()->index();
            $table->integer('xa_id')->unsigned()->index();
            $table->foreign('MaNguoiDung')->references('MaNguoiDung')->on('nguoidungs');
            $table->foreign('tinh_id')->references('id')->on('tinhthanhphos');
            $table->foreign('huyen_id')->references('id')->on('quanhuyens');
            $table->foreign('xa_id')->references('id')->on('xaphuongs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diachis');
    }
};
