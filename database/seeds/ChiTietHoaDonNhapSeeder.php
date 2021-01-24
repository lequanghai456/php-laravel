<?php

use Illuminate\Database\Seeder;

class ChiTietHoaDonNhapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1;$i<6;$i++){
            DB::table('chitiethoadonnhaps')->insert([
                'id_nguyen_lieu' => $i,
                'id_hoa_don_nhap' => $i,
                'so_luong' => $i*2,
                'don_gia' => $i,
            ]);
        }
    }
}
