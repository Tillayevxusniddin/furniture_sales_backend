<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryMethod;

class DeliveryMethodSeeder extends Seeder
{

    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Bepul',
                'ru' => 'Бесплатно',
            ],

            'estimated_time' => [
                'uz' => '5 kun',
                'ru' => '5 дня',
            ],

            'sum' => 0            
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standart',
                'ru' => 'Стандартно',
            ],

            'estimated_time' => [
                'uz' => '3 kun',
                'ru' => '3 дня',
            ],

            'sum' => 40000,            
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tez',
                'ru' => 'Быстрый'
            ],

            'estimated_time' => [
                'uz' => '1 kun',
                'ru' => '1 дня',
            ],

            'sum' => 80000,            
        ]);
    }
}
