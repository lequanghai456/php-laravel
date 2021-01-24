<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Monan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('monans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_mon_an');
            $table->integer('gia');
            $table->string('mo_ta');
            $table->string('hinh_anh');
            $table->unsignedBigInteger('id_loai_mon_an');
            $table->rememberToken();
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
        Schema::dropIfExists('monans');
    }
}
