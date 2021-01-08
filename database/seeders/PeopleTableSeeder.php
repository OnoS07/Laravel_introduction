<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'name' => 'taro',
            'mail' => 'yamada@taro',
            'age' => 20
        ];
        DB::table('people')->insert($params);

        $params = [
            'name' => 'jiro',
            'mail' => 'sato@jiro',
            'age' => 25
        ];
        DB::table('people')->insert($params);   
        
        $params = [
            'name' => 'ken',
            'mail' => 'suzuki@ken',
            'age' => 30
        ];
        DB::table('people')->insert($params);
    }
}
