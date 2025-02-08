<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $category = Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Ovqatlanish stollari',
                'ru' => 'Обеденные столы',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Jurnal stollari',
                'ru' => 'Журнальные столики',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Ofis stollari',
                'ru' => 'Офисные столы',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Yozuv stollari',
                'ru' => 'Письменные столы',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Konsol stollari',
                'ru' => 'Консольные столы',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Tashqi makon stollari',
                'ru' => 'Столы для улицы',
            ],
        ]);

        $category = Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Burchak divanlar',
                'ru' => 'Угловые диваны',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'To‘shakli divanlar',
                'ru' => 'Диваны-кровати',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Ko‘p funksiyali divanlar',
                'ru' => 'Многофункциональные диваны',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Minimalistik divanlar',
                'ru' => 'Минималистичные диваны',
            ],
        ]);

        $category = Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Кровать',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Bir kishilik yotoqlar',
                'ru' => 'Односпальные кровати',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Ikki kishilik yotoqlar',
                'ru' => 'Двуспальные кровати',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Ko‘tarma yotoqlar',
                'ru' => 'Подъемные кровати',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Bolalar yotoqlari',
                'ru' => 'Детские кровати',
            ],
        ]);

        $category = Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Dam olish kreslolari',
                'ru' => 'Реклайнеры',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Ofis kreslolari',
                'ru' => 'Офисные кресла',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Bolalar kreslolari',
                'ru' => 'Детские кресла',
            ],
        ]);


    }
}
