<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->truncate();

        $adminUser = User::factory()->admin()->create();
        $electionComissionUser = User::factory()->electionComission()->create();
        $users = User::factory()->count(20)->create();
    }
}
