<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoadonnhaps', function (Blueprint $table) {
            $table->foreign('id_nha_cung_cap')->references('id')->on('nhacungcaps');
        });
        Schema::table('chitiethoadonnhaps', function (Blueprint $table) {
            $table->foreign('id_nguyen_lieu')->references('id')->on('nguyenlieus');
            $table->foreign('id_hoa_don_nhap')->references('id')->on('hoadonnhaps');
        });
        Schema::table('monans', function (Blueprint $table) {
            $table->foreign('id_loai_mon_an')->references('id')->on('loaimonans');
        });
        Schema::table('chitiethoadons', function (Blueprint $table) {
            $table->foreign('id_hoa_don')->references('id')->on('hoadons');
            $table->foreign('id_mon_an')->references('id')->on('monans');
        });
        Schema::table('hoadons', function (Blueprint $table) {
            $table->foreign('id_ban')->references('id')->on('bans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoadonnhaps', function (Blueprint $table) {
            $table->dropforeign(['id_nha_cung_cap']);
        });
        Schema::table('chitiethoadonnhaps', function (Blueprint $table) {
            $table->dropforeign(['id_nguyen_lieu']);
            $table->dropforeign(['id_hoa_don_nhap']);
        });
        Schema::table('monans', function (Blueprint $table) {
            $table->dropforeign(['id_loai_mon_an']);
        });
        Schema::table('chitiethoadons', function (Blueprint $table) {
            $table->dropforeign(['id_hoa_don']);
            $table->dropforeign(['id_mon_an']);
        });
        Schema::table('phieudatbans', function (Blueprint $table) {
            $table->dropforeign(['id_ban']);
        });
    }
}
