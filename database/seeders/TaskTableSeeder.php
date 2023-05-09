<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $task_contents = ['kaimono', 'benkyo', 'souji'];
        foreach($task_contents as $content){
            DB::table('task')->insert([
                'content' => $content,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ]);
        }
    }
}
