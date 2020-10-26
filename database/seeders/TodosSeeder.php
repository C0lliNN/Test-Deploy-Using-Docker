<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'title' => 'Todo 1',
            'Description' => 'Description 1'
        ]);
        Todo::create([
            'title' => 'Todo ',
            'Description' => 'Description 2'
        ]);
    }
}
