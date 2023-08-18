<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $faker = Faker::create();
      foreach (range(1,50)as $index){
          DB::table('channels')->insert([
              'ChannelID'=>$faker->randomNumber(),
              'ChannelName'=>$faker->name(),
              'Description'=>$faker->text($maxNbChars =200),
              'SubscribersCount'=>$faker->randomFloat(2,1000,10000),
              'URL'=>$faker->domainName(),
              'created_at'=> now(),
              'updated_at'=>now(),

          ]);
      }
    }
}
