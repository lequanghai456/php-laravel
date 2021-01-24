<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nguyenlieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguyenlieus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten');
            $table->integer('don_gia');
            $table->string('tinh_trang');
            $table->timestamps();
            $table->softDeletes();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguyenlieus');
    }
}
