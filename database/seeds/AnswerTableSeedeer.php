<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++) {
            DB::table('answers')->insert([
                'option_1'  =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry '.$i,
                'option_2'  =>'look like readable English. Many desktop publishing packages and web page editors  '.$i,
                'option_3'  =>' the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of  '.$i,
                'option_4'  =>' by Cicero, written in 45 BC. This book is a treatise on the theory of'.$i,
                'correct'=>rand(1, 4),
                'question_id'=>$i
            ]);
        }
    }
}
