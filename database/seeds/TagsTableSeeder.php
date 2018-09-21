<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['title'=>'Toán'],
            ['title'=>'Văn'],
            ['title'=>'Anh văn'],
            ['title'=>'Kỹ năng sống']
        ]);
    }
}
