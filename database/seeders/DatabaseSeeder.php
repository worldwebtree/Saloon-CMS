<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'SuperAdmin@example.com',
            'contact-no' => '03319218866',
            'gender' => 'male',
            'role' => 'super-admin',
            'avatar' => 'example-image.png',
        ]);
    }
}
