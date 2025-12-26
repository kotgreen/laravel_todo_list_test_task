<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $statuses = [
            ['name' => 'не выполнена'],
            ['name' => 'в процессе'],
            ['name' => 'выполнена'],
        ];

        foreach ($statuses as $status) {
            $sta[] = Status::create($status);
        }

        Task::factory(5)->create();
    }
}
