<?php

namespace Database\Seeders;
use App\Models\Post2;
use Illuminate\Database\Seeder;

class Post2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array[]=array('user_id'=>1,'name' =>'こんにちは','contents' => 'あいうえお' );
        $array[]=array('user_id'=>1,'name' =>'こんばんは','contents' => 'かきくけこ' );
        //
        foreach ($array as $value) {
            # code...
                Post2::create([
                    'user_id'=>$value['user_id'],'name' => $value['name'],'contents' => $value['contents']
                ]);
            
        }
        
    }
}