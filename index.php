<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $index){
            DB::table('posts')->insert([
                'title' =>  $faker->sentence(5),
                'body'  =>  $faker->paragraph(2),
                'image'  =>  $faker->image('public/img',400,300)
            ]);
        }

    }
}
