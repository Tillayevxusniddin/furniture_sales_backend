<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentType;

class PaymentTypeSeeder extends Seeder
{

    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'uz' => 'Naqd',
                'ru' => 'Наличные',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Terminal',
                'ru' => 'Терминал',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Click',
                'ru' => 'Клик',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Paymee',
                'ru' => 'Пейми',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Uzum',
                'ru' => 'Узум',
            ]
        ]);

    }
}
