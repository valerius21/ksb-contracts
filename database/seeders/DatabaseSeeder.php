<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ini_set('memory_limit', '1024M');
        $this->call(ContractSeeder::class);
    }
}
