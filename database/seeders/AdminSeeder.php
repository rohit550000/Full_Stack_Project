<?php

namespace Database\Seeders;

use App\Models\Adminlogin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminlogins = [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin@admin.com'
        ];

        Adminlogin::create($adminlogins);
    }
}
