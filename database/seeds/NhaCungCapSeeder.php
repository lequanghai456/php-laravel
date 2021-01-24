<?php

use Illuminate\Database\Seeder;

class NhaCungCapSeeder extends Seeder
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
            DB::table('nhacungcaps')->insert([
                'ten' => 'Nhà cung cấp '.$i,
                'dia_chi' => 'Hi hi đố anh biết part'.$i,
                'sdt' => '030618112'.$i,
            ]);
        }
    }
}
