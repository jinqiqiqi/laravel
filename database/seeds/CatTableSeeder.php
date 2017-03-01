<?php

use Illuminate\Database\Seeder;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
            ['id' => 1, 'name' => 'Domestic x', 'date_of_birth' => '2016-12-09', 'breed_id' => 1],
            ['id' => 2, 'name' => 'Persian b', 'date_of_birth' => '2016-12-09', 'breed_id' => 2],
            ['id' => 3, 'name' => 'Siamese c', 'date_of_birth' => '2016-12-09', 'breed_id' => 4],
            ['id' => 4, 'name' => 'Abyssinian d', 'date_of_birth' => '2016-12-09', 'breed_id' => 3]
        ]);
    }
}
