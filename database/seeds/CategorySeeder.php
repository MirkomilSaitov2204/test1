<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>'Quruvchi'
        ]);
        DB::table('categories')->insert([
            'name'=>'Rassom'
        ]);
        DB::table('categories')->insert([
            'name'=>'Programmer'
        ]);
        DB::table('categories')->insert([
            'name'=>'Doktor'
        ]);
        DB::table('categories')->insert([
            'name'=>'Mexanik'
        ]);
        DB::table('categories')->insert([
            'name'=>'Xaydovchi'
        ]);
        DB::table('categories')->insert([
            'name'=>'Sotuvchi'
        ]);
        DB::table('categories')->insert([
            'name'=>'Oqituvchi'
        ]);
        DB::table('categories')->insert([
            'name'=>'Kimyogar'
        ]);
        DB::table('categories')->insert([
            'name'=>'Biznesmen'
        ]);
    }
}
