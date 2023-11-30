<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\userwo;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::truncate();
        Admin::create([
            'nama' => "Andrew",
            'username' => 'andrew',
            'password' => bcrypt('password'),
        ]);
    }
}