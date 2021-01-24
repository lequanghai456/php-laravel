<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitiethoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_hoa_don');
            $table->unsignedBigInteger('id_mon_an');
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
        Schema::dropIfExists('chitiethoadons');
    }
}
