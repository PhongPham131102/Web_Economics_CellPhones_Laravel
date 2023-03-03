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
        Schema::create('quanhuyens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenhuyen');
            $table->integer('tinh_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('tinh_id')->references('id')->on('tinhthanhphos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quanhuyens');
    }
};
