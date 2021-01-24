<?php

use Illuminate\Database\Seeder;

class NguyenLieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i<6;$i++){
            DB::table('nguyenlieus')->insert([
                'ten' => 'Nguyên liệu '.$i,
                'don_gia' => $i*10000,
                'tinh_trang' => 'còn',
            ]);
        }
    }
}
