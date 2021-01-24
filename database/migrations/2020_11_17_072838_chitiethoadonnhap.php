<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitiethoadonnhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadonnhaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_nguyen_lieu');
            $table->unsignedBigInteger('id_hoa_don_nhap');
            $table->integer('so_luong');
            $table->integer('don_gia');
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
        Schema::dropIfExists('chitiethoadonnhaps');
    }
}
