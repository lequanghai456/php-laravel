<?php

use Illuminate\Database\Seeder;

class HoaDonNhapSeeder extends Seeder
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
            DB::table('hoadonnhaps')->insert([
                'id_nha_cung_cap' => $i,
            ]);
        }
    }
}
