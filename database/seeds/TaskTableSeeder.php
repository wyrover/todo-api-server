<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create(['description' => 'primer tarea', 'done' => true,  'user_id' => 1]);
        Task::create(['description' => 'segunda tarea', 'done' => false,  'user_id' => 1]);
        Task::create(['description' => 'tercera tarea', 'done' => false,  'user_id' => 1]);
        Task::create(['description' => 'cuarta tarea', 'done' => true,  'user_id' => 1]);
        Task::create(['description' => 'quinta tarea', 'done' => true,  'user_id' => 2]);
        Task::create(['description' => 'sexta tarea', 'done' => false,  'user_id' => 2]);
        Task::create(['description' => 'septima tarea', 'done' => true,  'user_id' => 2]);
        Task::create(['description' => 'octava tarea', 'done' => false,  'user_id' => 3]);
        Task::create(['description' => 'novena tarea', 'done' => true,  'user_id' => 3]);
        Task::create(['description' => 'decima tarea', 'done' => true,  'user_id' => 3]);
    }
}
