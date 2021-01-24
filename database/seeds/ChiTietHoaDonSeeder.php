<?php

use Illuminate\Database\Seeder;

class ChiTietHoaDonSeeder extends Seeder
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
            DB::table('chitiethoadons')->insert([
                'id_hoa_don' => $i,
                'id_mon_an' => $i,
                'so_luong' => $i*2,
                'don_gia' => $i*1000,
            ]);
        }
    }
}
