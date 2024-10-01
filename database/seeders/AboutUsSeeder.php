<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class aboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\AboutUs::factory(100)->create();

        AboutUs::create([
            'title' => 'Test User',
            'description' => 'شركة "رايد" هي إحدى الشركات المتخصصة في تقديم خدمات توصيل طلبات الأكل والشرب للمنازل والمطاعم',
            'link' => 'https://chatgpt.com/c/66fba7e0-b0fc-800e-96d8-15e81591bf24',
        ]);

    }//
}
