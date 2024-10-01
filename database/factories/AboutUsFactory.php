<?php

namespace Database\Factories;

use App\Models\AboutUs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutUs>
 */
class AboutUsFactory extends Factory
{


    protected $model = AboutUs::class;


    public function definition(): array
    {
        return [

                'title' => $this->faker->sentence,
                'description' => $this->faker->paragraph,
                'link' => $this->faker->url,

        ];
    }
}
