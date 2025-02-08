<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;

class ValueSeeder extends Seeder
{

    public function run(): void
    {
        $attribute = Attribute::find(1);

        $attribute->values()->create([
            "name" => [
                "uz" => "Qizil",
                "ru" => "Красный",
            ]

        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "Qora",
                "ru" => "Черный",
            ]

        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "Jigarrang",
                "ru" => "Коричневый",
            ]

        ]);

        $attribute = Attribute::find(2);

        $attribute->values()->create([
            "name" => [
                "uz" => "MDF",
                "ru" => "МДФ",
            ]

        ]);

         $attribute->values()->create([
            "name" => [
                "uz" => "LDSP",
                "ru" => "ЛДСП",
            ]

        ]);

    }
}
