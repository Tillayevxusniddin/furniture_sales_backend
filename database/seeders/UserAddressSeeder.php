<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::find(2)->addresses()->create([
            "id" => 1,
            "user_id" => 2,
            "latitude" => "41310014",
            "longitude" => "69.280742",
            "region" => "Tashkent",
            "district" => "Mirabad tumani",
            "street" => "Mingurik Mahallah",
            "home" => "888",
            "created_at" => "2025-01-16T11:38:46.000000Z",
            "updated_at" => "2025-01-16T11:38:46.000000Z"
        ]);

        User::find(2)->addresses()->create([
            "id" => 2,
            "user_id" => 2,
            "latitude" => "41310014",
            "longitude" => "69.280742",
            "region" => "Tashkent",
            "district" => "Uchtepa tumani",
            "street" => "Gafur Gulom Mahallah",
            "home" => "123",
            "created_at" => "2025-01-16T11:38:46.000000Z",
            "updated_at" => "2025-01-16T11:38:46.000000Z"
        ]);
    }
}
