<?php

use Illuminate\Database\Seeder;

class LoaiMonAnSeeder extends Seeder
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
            DB::table('loaimonans')->insert([
                'ten_loai' => 'Loại món ăn '.$i,
            ]);
        }
    }
}
