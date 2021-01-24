<?php

use Illuminate\Database\Seeder;

class BanSeeder extends Seeder
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
            DB::table('bans')->insert([
                'so' => $i+10,
            ]);
        }
    }
}
