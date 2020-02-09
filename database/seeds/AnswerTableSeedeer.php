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
                'option_2'  =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry '.$i,
                'option_3'  =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry '.$i,
                'option_4'  =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry '.$i,
                'correct'=>rand(1, 4),
                'question_id'=>$i
            ]);
        }
    }
}
