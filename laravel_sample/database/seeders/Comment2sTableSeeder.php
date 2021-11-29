<?php

namespace Database\Seeders;
use App\Models\Comment2;
use Illuminate\Database\Seeder;

class Comment2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array[]=array('user_id'=>2,'chat' =>'おはよう','post2_id' =>1);
        $array[]=array('user_id'=>2,'chat' =>'高評価','post2_id' =>1);
        $array[]=array('user_id'=>2,'chat' =>'低評価','post2_id' =>1);
        $array[]=array('user_id'=>2,'chat' =>'おやすみ','post2_id' =>2);
        $array[]=array('user_id'=>2,'chat' =>'通知オンにした','post2_id' =>2);
        //
        foreach ($array as $value) {
            # code...
                Comment2::create([
                    'user_id'=>$value['user_id'],'chat' => $value['chat'],'post2_id' => $value['post2_id']
                ]);
            
        }
    }
}
