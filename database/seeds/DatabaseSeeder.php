<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //UsersTableSeeder::class
            //LoaiBanSeeder::class,
            LoaiMonAnSeeder::class,
            NguyenLieuSeeder::class,
            BanSeeder::class,
            UserSeeder::class,
            MonAnSeeder::class,
            NhaCungCapSeeder::class,
            HoaDonSeeder::class,
            HoaDonNhapSeeder::class,
            ChiTietHoaDonNhapSeeder::class,
            ChiTietHoaDonSeeder::class,
        ]);
    }
}
