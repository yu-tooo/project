<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name'=>'モンキー・D・ルフィ―',
            'age'=> 19,
            'nationality'=>'フーシャ村',
            'ability'=>'ゴムゴムの実'
        ];
        Member::create($param);

        $param = [
            'name'=>'ロロノア・ゾロ',
            'age'=> 21,
            'nationality'=>'不明'
        ];
        Member::create($param);

        $param = [
            'name'=>'ナミ',
            'age'=>20,
            'nationality'=>'ココヤシ村'
        ];
        Member::create($param);
    }
}
