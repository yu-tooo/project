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
            'task' => 'ใในใ'
        ];
        Todo::create($param);

        $param = [
            'task' => 'test'
        ];
        Todo::create($param);
    }
}
