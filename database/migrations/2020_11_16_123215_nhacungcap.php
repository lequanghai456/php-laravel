<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nhacungcap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten');
            $table->string('dia_chi');
            $table->string('sdt');
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
        Schema::dropIfExists('nhacungcaps');
    }
}
