<?php

use Illuminate\Database\Seeder;

class MonAnSeeder extends Seeder
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
            DB::table('monans')->insert([
                'ten_mon_an' => 'Món ăn'.$i,
                'gia' => $i*2000,
                'mo_ta' => 'Hi Hi Hi He He He ',
                'hinh_anh' => 'null',
                'id_loai_mon_an' => $i,
            ]);
        }
    }
}
