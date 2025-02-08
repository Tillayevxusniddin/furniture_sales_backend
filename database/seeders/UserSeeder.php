<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'phone' => '+998900917363',

        ]);

        $user->assignRole('admin');

        $user = User::create([
            'first_name' => 'Nafisa',
            'last_name' => 'Sobitjonova',
            'email' => 'nafisa@example.com',
            'password' => Hash::make('password'),
            'phone' => '+998888251066',

        ]);
        $user->assignRole('editor');

        $user = User::create([
            'first_name' => 'Otabek',
            'last_name' => 'Mamajonov',
            'email' => 'otabek@example.com',
            'password' => Hash::make('password'),
            'phone' => '+998997070000',

        ]);
        $user->assignRole('shop-manager');

        $user = User::create([
            'first_name' => 'Sherzodxoja',
            'last_name' => 'Niyozov',
            'email' => 'niyozov@example.com',
            'password' => Hash::make('password'),
            'phone' => '+998978978989',

        ]);
        $user->assignRole('helpdesk-support');

        $user = User::create([
            'first_name' => 'Xusniddin',
            'last_name' => 'Tillayev',
            'email' => 'tillayev@example.com',
            'password' => Hash::make('password'),
            'phone' => '+998887378363',

        ]);
        $user->assignRole('customer');

        $users = User::factory()->count(10)->create();
        foreach ($users as $user) {
            $user->assignRole('customer');
        }
    }
}

