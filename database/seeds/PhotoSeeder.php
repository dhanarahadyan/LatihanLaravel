<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<10; $i++){
            DB::table('product')->insert(
                [
                'name' => Str::random(10),
                'title' => Str::random(10).'@gmail.com'
                ]
                );
        }
    }
}
