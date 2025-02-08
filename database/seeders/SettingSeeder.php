<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Enums\SettingType;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = Setting::create([
            'name' => [
                'uz' => 'Til',
                'ru' =>  'Язык'
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'Oʻzbek',
                'ru' =>  'Озбек'
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'Rus',
                'ru' =>  'Русский'
            ]
        ]);



        $setting = Setting::create([
            'name' => [
                'uz' => 'Pul birligi',
                'ru' =>  'Пуль бирлиги'
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'So\'m',
                'ru' =>  'Сом'
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'Dollar',
                'ru' =>  'Доллар'
            ]
        ]);


        $setting = Setting::create([
            'name' => [
                'uz' => 'Dark mode',
                'ru' =>  'Темная тема'
            ],
            'type' => SettingType::SWITCH->value,
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => 'Xabarnomalar',
                'ru' =>  'Хабарномалы'
            ],
            'type' => SettingType::SWITCH->value,
        ]);

    }
}
