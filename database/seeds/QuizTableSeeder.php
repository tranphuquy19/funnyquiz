<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quiz')->insert([
            ['title'=>'Kiểm tra toán','image'=>'img1.jpg', 'description'=>'hướng dẫn kiểm tra toán', 'id_tag' => 1, 'author'=> 1, 
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            ['title'=>'Kiểm tra văn','image'=>'img2.jpg', 'description'=>'hướng dẫn kiểm tra văn', 'id_tag' => 2, 'author'=>1, 'author'=> 1, 
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['title'=>'Kiểm tra Anh văn','image'=>'img3.jpg', 'description'=>'hướng dẫn kiểm tra Anh văn', 'id_tag' => 3, 'author'=>1, 'author'=> 1, 
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['title'=>'Kiểm tra Kỹ năng sống','image'=>'img4.jpg', 'description'=>'hướng dẫn kiểm tra kỹ năng sống', 'id_tag' => 4, 'author'=>1, 'author'=> 1, 
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
