<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'task' => 'テスト'
        ];
        Todo::create($param);

        $param = [
            'task' => 'test'
        ];
        Todo::create($param);
    }
}
