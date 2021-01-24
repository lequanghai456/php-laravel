<?php

use Illuminate\Database\Seeder;

class HoaDonSeeder extends Seeder
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
            DB::table('hoadons')->insert([
                'id' => $i,
                'tong_tien' => $i*10000,
                'id_ban' => $i,
            ]);
        }
    }
}
