<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'ru' => 'Yangi RU',
            ],
            'for' => 'order',
            'code' => 'new',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tasdiqlandi',
                'ru' => 'Tasdiqlandi RU',
            ],
            'for' => 'order',
            'code' => 'confirmed',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazib berilmoqda',
                'ru' => 'Yetkazib berilmoqda RU',
            ],
            'for' => 'order',
            'code' => 'shipping',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazib berildi',
                'ru' => 'Yetkazib berildi RU',
            ],
            'for' => 'order',
            'code' => 'delivered',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazib berildi',
                'ru' => 'Yetkazib berildi RU',
            ],
            'for' => 'order',
            'code' => 'delivered',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tugatildi',
                'ru' => 'Tugatildi RU',
            ],
            'for' => 'order',
            'code' => 'completed',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yopildi',
                'ru' => 'Yopildi RU',
            ],
            'for' => 'order',
            'code' => 'closed',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Bekor qilindi',
                'ru' => 'Bekor qilindi RU',
            ],
            'for' => 'order',
            'code' => 'canceled',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Qaytarib berildi',
                'ru' => 'Qaytarib berildi RU',
            ],
            'for' => 'order',
            'code' => 'refunded',
        ]);

        Status::create([
            'name' => [
                'uz' => 'To\'lov kutilmoqda',
                'ru' => 'To\'lov kutilmoqda RU',
            ],
            'for' => 'order',
            'code' => 'waiting',
        ]);

        Status::create([
            'name' => [
                'uz' => 'To\'landi',
                'ru' => 'To\'landi RU',
            ],
            'for' => 'order',
            'code' => 'paid',
        ]);

        Status::create([
            'name' => [
                'uz' => 'To\'lovda xatolik qilindi',
                'ru' => 'To\'lovda xatolik qilindi RU',
            ],
            'for' => 'order',
            'code' => 'payment_error',
        ]);


    }
}
