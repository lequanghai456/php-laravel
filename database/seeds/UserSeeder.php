<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //for($i = 1;$i<6;$i++){
            DB::table('users')->insert([
                'tai_khoan' => 'user1',
                'password' => bcrypt('123'),
                'ho_ten' => 'Nguyễn Văn A',
                'sdt' => '034406638',
                'dia_chi' => 'Huỳnh Thúc Kháng ',
                'khoa' => false,
                'phan_quyen' => false,
            ]);
        //}
    }
}
