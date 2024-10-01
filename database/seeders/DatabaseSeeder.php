<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AboutUs;
use Database\Seeders\AboutUsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

        {

            AboutUs::factory(100)->create();

            AboutUs::create([
                'title' => 'Test User',
                'description' => 'شركة "رايد" هي إحدى الشركات المتخصصة في تقديم خدمات توصيل طلبات الأكل والشرب للمنازل والمطاعم
    ',
                'link' => 'https://chatgpt.com/c/66fba7e0-b0fc-800e-96d8-15e81591bf24',
            ]);
            }
}
