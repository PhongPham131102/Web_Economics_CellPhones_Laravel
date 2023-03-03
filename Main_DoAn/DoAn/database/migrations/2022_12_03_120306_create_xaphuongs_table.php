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
        Schema::create('xaphuongs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenxa');
            $table->integer('huyen_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('huyen_id')->references('id')->on('quanhuyens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xaphuongs');
    }
};
